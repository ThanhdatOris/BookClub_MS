<?php

namespace App\DataFixtures;

use App\Entity\Users;
use App\Entity\Activities;
use App\Entity\Attendances;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Create sample users
        $users = [];
        for ($i = 1; $i <= 5; $i++) {
            $user = new Users();
            $user->setStudentId("STU$i");
            $user->setName("User $i");
            $user->setEmail("user$i@example.com");
            $user->setPassword($this->passwordHasher->hashPassword($user, 'password123'));
            $user->setRole('ROLE_USER');
            $user->setStatus('active');
            $user->setClassId("Class $i");
            $user->setFaculty("Faculty $i");
            $user->setContactInfo("Contact info for User $i");
            $user->setCreateAt(new \DateTime(sprintf('-%d days', rand(1, 30))));
            $user->setUpdateAt(new \DateTime());

            $manager->persist($user);
            $users[] = $user;
        }

        // Create sample activities
        $activities = [];
        for ($i = 1; $i <= 10; $i++) {
            $activity = new Activities();
            $activity->setTitle("Activity $i");
            $activity->setDescriptiton("This is the description for Activity $i.");
            $activity->setDate(new \DateTime(sprintf('-%d days', rand(1, 30))));
            $activity->setTime(new \DateTime(sprintf('%d:%d:00', rand(8, 18), rand(0, 59))));
            $activity->setLocation("Location $i");
            $activity->setStatus('active');
            $activity->setCreatedAt(new \DateTime(sprintf('-%d days', rand(1, 30))));
            $activity->setUpdatedAt(new \DateTime());
            $activity->setCreatedBy($users[array_rand($users)]); // Assign a random user as the creator

            $manager->persist($activity);
            $activities[] = $activity;
        }

        // Create sample attendances
        for ($i = 1; $i <= 20; $i++) {
            $attendance = new Attendances();
            $attendance->setUserId($users[array_rand($users)]); // Assign a random user
            $attendance->setActivityId($activities[array_rand($activities)]); // Assign a random activity
            $attendance->setStatus('present'); // Example status
            $attendance->setRemark("Remark for attendance $i");
            $attendance->setMarkedAt(new \DateTime(sprintf('-%d days', rand(1, 30))));
            $attendance->setMarkedBy($users[array_rand($users)]); // Assign a random user as the marker

            $manager->persist($attendance);
        }

        $manager->flush();
    }
}
