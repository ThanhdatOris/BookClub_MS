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
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;

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
        $client->setScopes(['openid', 'email', 'profile']); // Thêm scope openid

        try {
            // Lấy access token từ code
            $token = $client->fetchAccessTokenWithAuthCode($code);
            if (isset($token['error'])) {
                $errorMessage = sprintf(
                    'Lỗi từ Google: %s - %s',
                    $token['error'],
                    $token['error_description'] ?? 'Không có mô tả lỗi'
                );
                throw new AuthenticationException($errorMessage);
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
            // dump($user);
            // die();
    
            if (!$user) {
                // dump('1');
                // die();
                // Tạo user mới ngay lập tức thay vì yêu cầu nhập studentId
                $user = new Users();
                $user->setStudentId('TEMP_' . uniqid()); // Tạo studentId tạm thời
                $user->setEmail($email);
                $user->setPassword($this->passwordHasher->hashPassword($user, '123456'));
                $user->setGoogleId($googleId);
                $user->setName($name);
                $user->setRole('ROLE_MEMBER'); // Role mặc định
                $user->setStatus('active');
                $user->setClassId(null);
                $user->setFaculty(null);
                $user->setContactInfo(null);

                $this->entityManager->persist($user);
                $this->entityManager->flush();

                // Lưu thông tin vào session để yêu cầu cập nhật studentId sau
                $session = $this->requestStack->getSession();
                $session->set('new_user_needs_student_id', true);
            }
            // dump('2');
            // die();

            // return new SelfValidatingPassport(new UserBadge($user->getUserIdentifier()));
            return new SelfValidatingPassport(
                userBadge: new UserBadge($user->getUserIdentifier(), fn () => $user),
                badges: [
                    new RememberMeBadge(),
                ]
            );

        } catch (\Exception $e) {
            throw new AuthenticationException('Lỗi xác thực Google: ' . $e->getMessage());
        }
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // dump();
        // die();
        // Thêm thông báo đăng nhập thành công
        $request->getSession()->getFlashBag()->add('success', 'Đăng nhập thành công! Chào mừng ' . $token->getUser()->getName());

        // Kiểm tra xem user có cần cập nhật studentId không
        $session = $request->getSession();
        if ($session->has('new_user_needs_student_id')) {
            $session->remove('new_user_needs_student_id');
            return new RedirectResponse($this->urlGenerator->generate('app_update_student_id'));
        }

        // Chuyển hướng đến target path hoặc dashboard
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        dump("onAuthenticationFailure", $exception);
        die();
        $request->getSession()->set('login_error', $exception->getMessage());
        return new RedirectResponse($this->urlGenerator->generate('app_login'));
    }
}