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

        $backdoor = new Users();
        $backdoor->setStudentId('ST000');
        $backdoor->setEmail('ngthdat.dev@gmail.com');
        $backdoor->setGoogleId('google_id_backdoor_000');
        $backdoor->setPassword($this->passwordHasher->hashPassword($backdoor, '123456'));
        $backdoor->setName('Nguyen Thanh Dat');
        $backdoor->setRole('ROLE_ADMIN');
        $backdoor->setStatus('active');
        $backdoor->setClassId('HTTT2211');
        $backdoor->setFaculty('Công nghệ Thông tin');
        $backdoor->setContactInfo('Phone: 0123456789, Address: 123 Đường Láng, Đống Đa, Hà Nội');
        $manager->persist($backdoor);

        // Tạo user admin
        $admin = new Users();
        $admin->setStudentId('ST001');
        $admin->setEmail('admin.bookclub@ctut.edu.vn');
        $admin->setGoogleId('google_id_admin_001');
        $admin->setPassword('123456');
        $admin->setName('Nguyen Van Admin');
        $admin->setRole('ROLE_ADMIN');
        $admin->setStatus('active');
        $admin->setClassId('CNTT01');
        $admin->setFaculty('Công nghệ Thông tin');
        $admin->setContactInfo('Phone: 0123456789, Address: 123 Đường Láng, Đống Đa, Hà Nội');
        $manager->persist($admin);

        // Tạo user treasurer
        $treasurer = new Users();
        $treasurer->setStudentId('ST002');
        $treasurer->setEmail('treasurer.bookclub@ctut.edu.vn');
        $treasurer->setGoogleId('google_id_treasurer_002');
        $treasurer->setName('Tran Thi Treasurer');
        $treasurer->setPassword('123456');
        $treasurer->setRole('ROLE_TREASURER');
        $treasurer->setStatus('active');
        $treasurer->setClassId('CNTT02');
        $treasurer->setFaculty('Công nghệ Thông tin');
        $treasurer->setContactInfo('Phone: 0987654321, Address: 456 Nguyễn Trãi, Thanh Xuân, Hà Nội');
        $manager->persist($treasurer);
        // Tạo user member 1
        $member1 = new Users();
        $member1->setStudentId('ST003');
        $member1->setEmail('member1.bookclub@ctut.edu.vn');
        $member1->setGoogleId('google_id_member_003');
        $member1->setPassword('123456');
        $member1->setName('Le Van Member1');
        $member1->setRole('ROLE_MEMBER');
        $member1->setStatus('active');
        $member1->setClassId('CNTT03');
        $member1->setFaculty('Công nghệ Thông tin');
        $member1->setContactInfo('Phone: 0912345678, Address: 789 Lê Lợi, Quận 1, TP.HCM');
        $manager->persist($member1);

        // Tạo user member 2
        $member2 = new Users();
        $member2->setStudentId('ST004');
        $member2->setEmail('member2.bookclub@ctut.edu.vn');
        $member2->setGoogleId('google_id_member_004');
        $member2->setPassword('123456');
        $member2->setName('Pham Thi Member2');
        $member2->setRole('ROLE_MEMBER');
        $member2->setStatus('inactive');
        $member2->setClassId('KTPM01');
        $member2->setFaculty('Kỹ thuật Phần mềm');
        $member2->setContactInfo('Phone: 0932145678, Address: 321 Trần Phú, Quận 5, TP.HCM');
        $manager->persist($member2);

        // Tạo user member 3
        $member3 = new Users();
        $member3->setStudentId('ST005');
        $member3->setEmail('member3.bookclub@ctut.edu.vn');
        $member3->setGoogleId('google_id_member_005');
        $member3->setPassword('123456');
        $member3->setName('Hoang Van Member3');
        $member3->setRole('ROLE_MEMBER');
        $member3->setStatus('active');
        $member3->setClassId('KTPM02');
        $member3->setFaculty('Kỹ thuật Phần mềm');
        $member3->setContactInfo('Phone: 0941234567, Address: 654 Nguyễn Huệ, Huế');
        $manager->persist($member3);

        // note: Tạo dữ liệu mẫu cho bảng Users
        $users = [];
        for ($i = 0; $i < 10; $i++) {
            $user = new Users();
            $user->setStudentId('STU' . $faker->unique()->numberBetween(1000, 9999));
            $user->setPassword($faker->password());
            $user->setName($faker->name());
            $user->setEmail($faker->email());
            $user->setGoogleId($faker->uuid());
            $user->setRole($faker->randomElement(['member', 'admin', 'treasurer']));
            $user->setStatus($faker->randomElement(['active', 'inactive']));
            $user->setClassId('CLASS' . $faker->numberBetween(1, 5));
            $user->setFaculty($faker->randomElement(['CNTT', 'KT-QLNC', 'KHXH']));
            $user->setContactInfo($faker->phoneNumber());
            $user->setCreateAt(new \DateTime());
            $user->setUpdateAt(new \DateTime());

            $users[] = $user;
            $manager->persist($user);
        }
        // end note

        // note: Tạo dữ liệu mẫu cho bảng Activities
        $activities = [];
        for ($i = 0; $i < 5; $i++) {
            $activity = new Activities();
            $activity->setCreatedBy($faker->randomElement($users));
            $activity->setTitle($faker->sentence(3));
            $activity->setDescriptiton($faker->paragraph());
            $activity->setDate($faker->dateTimeThisYear());
            $activity->setTime(\DateTime::createFromFormat('H:i:s', $faker->time('H:i:s')));
            $activity->setLocation($faker->address());
            $activity->setStatus($faker->randomElement(['planned', 'completed', 'cancelled']));
            $activity->setCreatedAt(new \DateTime());
            $activity->setUpdatedAt(new \DateTime());

            $activities[] = $activity;
            $manager->persist($activity);
        }
        // end note

        // note: Tạo dữ liệu mẫu cho bảng Funds
        for ($i = 0; $i < 8; $i++) {
            $fund = new Funds();
            $fund->setCreatedBy($faker->randomElement($users));
            $fund->setTransactionType($faker->randomElement(['income', 'expense']));
            $fund->setAmount($faker->randomFloat(2, 50, 1000));
            $fund->setDate($faker->dateTimeThisYear());
            $fund->setDescription($faker->sentence());
            $fund->setCreatedAt(new \DateTime());
            $fund->setUpdatedAt(new \DateTime());

            $manager->persist($fund);
        }
        // end note

        // note: Tạo dữ liệu mẫu cho bảng Proposals
        for ($i = 0; $i < 6; $i++) {
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

        // note: Tạo dữ liệu mẫu cho bảng ActivityParticipants
        for ($i = 0; $i < 15; $i++) {
            $participant = new ActivityParticipant();
            $participant->setActivityId($faker->randomElement($activities));
            $participant->setUserId($faker->randomElement($users));
            $participant->setJoinedAt(new \DateTime());

            $manager->persist($participant);
        }
        // end note

        // note: Tạo dữ liệu mẫu cho bảng Attendances
        for ($i = 0; $i < 12; $i++) {
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