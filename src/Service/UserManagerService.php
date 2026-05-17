<?php

namespace App\Service;

use App\Entity\Users;
use App\Repository\UsersRepository;
use App\Repository\ActivityParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserManagerService
{
    private $em;
    private $usersRepository;
    private $participantRepository;

    public function __construct(
        EntityManagerInterface $em,
        UsersRepository $usersRepository,
        ActivityParticipantRepository $participantRepository
    ) {
        $this->em = $em;
        $this->usersRepository = $usersRepository;
        $this->participantRepository = $participantRepository;
    }

    public function getUsersWithActivityStats(?string $search): array
    {
        $users = $this->usersRepository->searchUsers($search);
        
        // Optimize: fetching all participations for these users instead of loop querying
        // Since we don't have a direct query builder method ready, we fetch all participations and group in PHP memory
        $userIds = array_map(fn($u) => $u->getId(), $users);
        
        $participations = [];
        if (!empty($userIds)) {
            $participations = $this->participantRepository->createQueryBuilder('p')
                ->where('p.userId IN (:userIds)')
                ->setParameter('userIds', $userIds)
                ->getQuery()
                ->getResult();
        }

        $userStats = [];
        foreach ($userIds as $id) {
            $userStats[$id] = ['total_activities' => 0, 'attended_activities' => 0];
        }

        foreach ($participations as $p) {
            $uId = $p->getUserId()->getId();
            $userStats[$uId]['total_activities']++;
            if ($p->getStatus() === 'attended') {
                $userStats[$uId]['attended_activities']++;
            }
        }

        $usersData = [];
        foreach ($users as $user) {
            $id = $user->getId();
            $usersData[] = [
                'id' => $id,
                'studentId' => $user->getStudentId(),
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'faculty' => $user->getFaculty(),
                'classId' => $user->getClassId(),
                'role' => $user->getRole(),
                'status' => $user->getStatus(),
                'gender' => $user->getGender(),
                'contactInfo' => $user->getContactInfo(),
                'total_activities' => $userStats[$id]['total_activities'],
                'attended_activities' => $userStats[$id]['attended_activities'],
            ];
        }

        return [
            'users' => $users,
            'usersData' => $usersData,
            'userStats' => $userStats
        ];
    }

    public function toggleUserStatus(Users $user, ?Users $currentUser): string
    {
        if ($currentUser && $currentUser->getId() === $user->getId()) {
            throw new \LogicException('Bạn không được phép tự thay đổi trạng thái tài khoản của mình.');
        }

        $newStatus = $user->getStatus() === 'active' ? 'inactive' : 'active';
        $user->setStatus($newStatus);
        $user->setUpdateAt(new \DateTime());
        $this->em->flush();

        return $newStatus;
    }
}
