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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

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
            $existingUser = $entityManager->getRepository(Users::class)->findOneBy(['student_id' => $studentId]);
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
            $user->setRole('ROLE_MEMBER');
            $user->setStatus('active');
            $user->setClassId('');
            $user->setFaculty('');
            $user->setContactInfo('');

            $entityManager->persist($user);
            $entityManager->flush();

            $session->remove('google_user_data');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/student_id.html.twig', [
            'error' => null,
        ]);
    }

    #[Route(path: '/update-student-id', name: 'app_update_student_id', methods: ['GET', 'POST'])]
    public function updateStudentId(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Nếu studentId không bắt đầu bằng TEMP_, không cần cập nhật
        if (!str_starts_with($user->getStudentId(), 'TEMP_')) {
            return $this->redirectToRoute('app_dashboard');
        }

        // Tạo form để cập nhật studentId
        $form = $this->createFormBuilder()
            ->add('student_id', TextType::class, [
                'label' => 'Mã sinh viên',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Mã sinh viên không được để trống.']),
                    new Assert\Length([
                        'max' => 20,
                        'maxMessage' => 'Mã sinh viên không được dài quá 20 ký tự.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[A-Za-z0-9]+$/',
                        'message' => 'Mã sinh viên chỉ được chứa chữ cái và số.',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'pattern' => '[A-Za-z0-9]+',
                    'maxlength' => 20,
                ],
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $studentId = $form->get('student_id')->getData();

            // Kiểm tra studentId đã tồn tại chưa
            $existingUser = $entityManager->getRepository(Users::class)->findOneBy(['student_id' => $studentId]);
            if ($existingUser) {
                $this->addFlash('error', 'Mã sinh viên đã tồn tại. Vui lòng thử mã khác.');
                return $this->render('security/update_student_id.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            try {
                // Cập nhật studentId
                $user->setStudentId($studentId);
                $entityManager->flush();

                $this->addFlash('success', 'Cập nhật mã sinh viên thành công!');
                return $this->redirectToRoute('app_dashboard');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Có lỗi xảy ra khi cập nhật mã sinh viên: ' . $e->getMessage());
            }
        }

        return $this->render('security/update_student_id.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}