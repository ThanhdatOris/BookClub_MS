<?php

namespace App\DataFixtures;

use App\Entity\Activities;
use App\Entity\ActivityParticipant;
use App\Entity\Users;
use App\Entity\Funds;
use App\Entity\Proposals;
use App\Entity\Attendances;
use App\Entity\ActivityParticipants;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    
    // Inject the password hasher via the constructor
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create();

        // Tạo user admin
        $admin = new Users();
        $admin->setEmail('ngthdat.dev@gmail.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, '123456'));
        $admin->setName('Nguyen Thanh Dat');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setStudentId('ST000');
        $admin->setStatus('active');
        $admin->setClassId('HTTT2211');
        $admin->setFaculty('Công nghệ Thông tin');
        $admin->setContactInfo('Phone: 0123456789, Address: 123 Đường Láng, Đống Đa, Hà Nội');
        $admin->setCreateAt(new \DateTime());
        $admin->setUpdateAt(new \DateTime());
        $admin->setGoogleId('google_id_admin_000');
        $manager->persist($admin);

        // Tạo user treasurer
        $treasurer = new Users();
        $treasurer->setEmail('datns.img@gmail.com');
        $treasurer->setPassword($this->passwordHasher->hashPassword($treasurer, '123456'));
        $treasurer->setName('Dat Nguyen');
        $treasurer->setRoles(['ROLE_TREASURER']);
        $treasurer->setStudentId('ST001');
        $treasurer->setStatus('active');
        $treasurer->setClassId('CNTT02');
        $treasurer->setFaculty('Công nghệ Thông tin');
        $treasurer->setContactInfo('Phone: 0987654321, Address: 456 Nguyễn Trãi, Thanh Xuân, Hà Nội');
        $treasurer->setCreateAt(new \DateTime());
        $treasurer->setUpdateAt(new \DateTime());
        $treasurer->setGoogleId('google_id_treasurer_001');
        $manager->persist($treasurer);

        // Tạo 48 user member khác (tổng cộng 50 user để kiểm tra phân trang)
        $users = [$admin, $treasurer]; // Lưu tất cả user vào mảng để sử dụng sau
        for ($i = 0; $i < 48; $i++) {
            $user = new Users();
            $user->setEmail($faker->unique()->email());
            $user->setPassword($this->passwordHasher->hashPassword($user, '123456'));
            $user->setName($faker->name());
            $user->setRoles(['ROLE_USER']);
            $user->setStudentId('STU' . $faker->unique()->numberBetween(1000, 9999));
            $user->setStatus($faker->randomElement(['active', 'inactive']));
            $user->setClassId('CLASS' . $faker->numberBetween(1, 5));
            $user->setFaculty($faker->randomElement(['CNTT', 'KT-QLNC', 'KHXH']));
            $user->setContactInfo('Phone: ' . $faker->phoneNumber() . ', Address: ' . $faker->address());
            $user->setCreateAt(new \DateTime());
            $user->setUpdateAt(new \DateTime());
            $user->setGoogleId('google_id_' . $faker->uuid());
            $users[] = $user;
            $manager->persist($user);
        }

        // Tạo 100 activities (để kiểm tra phân trang)
        $activities = [];
        for ($i = 0; $i < 100; $i++) {
            $activity = new Activities();
            $activity->setCreatedBy($faker->randomElement($users));
            $activity->setTitle($faker->sentence(3));
            $activity->setDescription($faker->paragraph());
            $activity->setDate($faker->dateTimeThisYear());
            $activity->setTime(\DateTime::createFromFormat('H:i:s', $faker->time('H:i:s')));
            $activity->setLocation($faker->address());
            $activity->setStatus($faker->randomElement(['planned', 'ongoing', 'completed', 'cancelled']));
            $activity->setCreatedAt(new \DateTime());
            $activity->setUpdatedAt(new \DateTime());

            $activities[] = $activity;
            $manager->persist($activity);
        }

        // Tạo 200 funds (để kiểm tra phân trang)
        for ($i = 0; $i < 200; $i++) {
            $fund = new Funds();
            $fund->setCreatedBy($faker->randomElement($users));
            $fund->setTransactionType($faker->randomElement(['income', 'expense']));
            $fund->setAmount($faker->randomFloat(2, 50, 1000));
            $fund->setDate($faker->dateTimeThisYear());
            $fund->setDescription($faker->sentence());
            $fund->setCreatedAt(new \DateTime());
            $fund->setUpdatedAt(new \DateTime());
        }

        // note: Tạo dữ liệu mẫu cho bảng Proposals
        for ($i = 0; $i < 15; $i++) {
            $proposal = new Proposals();
            $proposal->setUserId($faker->randomElement($users));
            $proposal->setType($faker->randomElement(['event', 'purchase', 'other']));
            $proposal->setContent($faker->paragraph());
            $proposal->setStatus($faker->randomElement(['pending', 'approved', 'rejected']));
            $proposal->setCreatedAt(new \DateTime());
            $proposal->setUpdatedAt(new \DateTime());

            $manager->persist($proposal);
        }
        // end note

        // note: Tạo dữ liệu mẫu cho bảng Attendances
        for ($i = 0; $i < 250; $i++) {
            $attendance = new Attendances();
            $attendance->setUserId($faker->randomElement($users));
            $attendance->setActivityId($faker->randomElement($activities));
            $attendance->setMarkedBy($faker->randomElement($users));
            $attendance->setStatus($faker->randomElement(['present', 'absent', 'late']));
            $attendance->setRemark($faker->sentence());
            $attendance->setMarkedAt(new \DateTime());

            $manager->persist($attendance);
        }
        // end note

        $manager->flush();
    }
}