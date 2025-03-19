<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        return $this->render('security/login.html.twig', [
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/connect/google', name: 'connect_google_start')]
    public function connectGoogle(): Response
    {
        $googleAuthUrl = sprintf(
            'https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=%s&redirect_uri=%s&scope=%s',
            urlencode($_ENV['GOOGLE_CLIENT_ID']),
            urlencode($_ENV['GOOGLE_REDIRECT_URI']),
            urlencode('email profile')
        );

        return $this->redirect($googleAuthUrl);
    }

    #[Route(path: '/connect/google/check', name: 'connect_google_check')]
    public function connectGoogleCheck(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the authenticator.');
    }

    #[Route(path: '/student-id', name: 'app_student_id_form', methods: ['GET', 'POST'])]
    public function studentIdForm(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $googleUserData = $session->get('google_user_data');

        if (!$googleUserData) {
            return $this->redirectToRoute('app_login');
        }

        if ($request->isMethod('POST')) {
            $studentId = $request->request->get('student_id');

            // Kiểm tra studentId đã tồn tại chưa
            $existingUser = $entityManager->getRepository(Users::class)->findOneBy(['studentId' => $studentId]);
            if ($existingUser) {
                return $this->render('security/student_id.html.twig', [
                    'error' => 'Mã sinh viên đã tồn tại. Vui lòng thử mã khác.',
                ]);
            }

            // Tạo user mới
            $user = new Users();
            $user->setStudentId($studentId);
            $user->setEmail($googleUserData['email']);
            $user->setGoogleId($googleUserData['googleId']);
            $user->setName($googleUserData['name']);
            $user->setRole('ROLE_MEMBER'); // Role mặc định
            $user->setStatus('active');
            $user->setClassId(''); // Có thể yêu cầu nhập thêm
            $user->setFaculty(''); // Có thể yêu cầu nhập thêm
            $user->setContactInfo('');

            $entityManager->persist($user);
            $entityManager->flush();

            // Xóa dữ liệu Google khỏi session
            $session->remove('google_user_data');

            // Chuyển hướng để đăng nhập lại
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/student_id.html.twig', [
            'error' => null,
        ]);
    }
}