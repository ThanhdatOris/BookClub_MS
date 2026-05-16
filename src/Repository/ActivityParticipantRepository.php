<?php

namespace App\Repository;

use App\Entity\ActivityParticipant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ActivityParticipant>
 */
class ActivityParticipantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActivityParticipant::class);
    }

    public function findByActivityAndUser(int $activityId, int $userId): ?ActivityParticipant
    {
        return $this->createQueryBuilder('ap')
            ->where('ap.activityId = :activityId')
            ->andWhere('ap.userId = :userId')
            ->setParameter('activityId', $activityId)
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getOneOrNullResult();
    }
}