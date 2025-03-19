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
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // note: Tạo dữ liệu mẫu cho bảng Users
        $users = [];
        for ($i = 0; $i < 10; $i++) {
            $user = new Users();
            $user->setStudentId('STU' . $faker->unique()->numberBetween(1000, 9999));
            $user->setPassword($faker->password());
            $user->setName($faker->name());
            $user->setEmail($faker->email());
            $user->setRole($faker->randomElement(['member', 'admin', 'Treasurer']));
            $user->setStatus($faker->randomElement(['active', 'inactive']));
            $user->setClassId('CLASS' . $faker->numberBetween(1, 5));
            $user->setFaculty($faker->randomElement(['CNTT', 'Kinh tế', 'Ngoại ngữ']));
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

        // Tạo user admin
        $admin = new Users();
        $admin->setUsername('admin');
        $admin->setRole('ROLE_ADMIN');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin123'));
        $manager->persist($admin);

        // Tạo user treasurer
        $treasurer = new Users();
        $treasurer->setUsername('treasurer');
        $treasurer->setRole('ROLE_TREASURER');
        $treasurer->setPassword($this->passwordHasher->hashPassword($treasurer, 'treasurer123'));
        $manager->persist($treasurer);

        // Tạo user member
        $member = new Users();
        $member->setUsername('member');
        $member->setRole('ROLE_MEMBER');
        $member->setPassword($this->passwordHasher->hashPassword($member, 'member123'));
        $manager->persist($member);

        $manager->flush();
    }
}