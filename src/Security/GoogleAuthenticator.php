<?php

namespace App\Security;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Google_Client;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class GoogleAuthenticator extends AbstractAuthenticator
{
    use TargetPathTrait;

    private $entityManager;
    private $urlGenerator;
    private $requestStack;

    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, RequestStack $requestStack)
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->requestStack = $requestStack;
    }

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'connect_google_check' && $request->query->has('code');
    }

    public function authenticate(Request $request): Passport
    {
        $code = $request->query->get('code');

        // Khởi tạo Google Client
        $client = new Google_Client();
        $client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
        $client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
        $client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);
        $client->setScopes(['openid', 'email', 'profile']);

        try {
            // Lấy access token từ code
            $token = $client->fetchAccessTokenWithAuthCode($code);
            if (isset($token['error'])) {
                if ($token['error'] === 'idpiframe_initialization_failed') {
                    throw new AuthenticationException('Lỗi từ Google: idpiframe_initialization_failed. Vui lòng kiểm tra third-party cookies trong trình duyệt hoặc cấu hình HTTPS.');
                }
                throw new AuthenticationException('Lỗi từ Google: ' . $token['error'] . ' - ' . ($token['error_description'] ?? 'Không có mô tả lỗi'));
            }

            $client->setAccessToken($token['access_token']);

            // Lấy thông tin user từ Google
            $googleService = new \Google_Service_Oauth2($client);
            $googleUser = $googleService->userinfo->get();
            $email = $googleUser->email;
            $googleId = $googleUser->id;
            $name = $googleUser->name;

            // Tìm user trong cơ sở dữ liệu bằng email
            $user = $this->entityManager->getRepository(Users::class)->findOneBy(['email' => $email]);

            if (!$user) {
                // Lưu thông tin Google vào session và yêu cầu nhập studentId
                $session = $this->requestStack->getSession();
                $session->set('google_user_data', [
                    'email' => $email,
                    'googleId' => $googleId,
                    'name' => $name,
                ]);
                throw new AuthenticationException('Yêu cầu nhập studentId');
            }

            return new SelfValidatingPassport(new UserBadge($user->getUserIdentifier()));
        } catch (\Exception $e) {
            throw new AuthenticationException('Lỗi xác thực Google: ' . $e->getMessage());
        }
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        if ($exception->getMessage() === 'Yêu cầu nhập studentId') {
            return new RedirectResponse($this->urlGenerator->generate('app_student_id_form'));
        }

        $request->getSession()->set('login_error', $exception->getMessage());
        return new RedirectResponse($this->urlGenerator->generate('app_login'));
    }
}