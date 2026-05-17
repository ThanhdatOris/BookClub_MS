<?php

namespace App\Repository;

use App\Entity\Activities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activities>
 */
class ActivitiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activities::class);
    }

    public function findByMonth(int $month): array
    {
        return $this->createQueryBuilder('a')
            ->where('MONTH(a.date) = :month')
            ->setParameter('month', $month)
            ->getQuery()
            ->getResult();
    }

    public function countNewActivities(\DateTime $startOfMonth): int
    {
        return (int) $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.created_at >= :startOfMonth')
            ->setParameter('startOfMonth', $startOfMonth)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getFilteredActivitiesQueryBuilder(?string $search, ?string $status)
    {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.participants', 'ap')
            ->addSelect('ap')
            ->leftJoin('ap.userId', 'u')
            ->addSelect('u')
            ->orderBy('a.id', 'DESC');

        if ($search) {
            $qb->andWhere('a.title LIKE :search OR a.location LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($status && in_array($status, ['planned', 'ongoing', 'completed', 'cancelled'], true)) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $status);
        }

        return $qb;
    }

    public function getActivitiesStatistics(): array
    {
        return [
            'total' => $this->count([]),
            'pending' => $this->count(['status' => 'planned']),
            'ongoing' => $this->count(['status' => 'ongoing']),
            'completed' => $this->count(['status' => 'completed']),
            'cancelled' => $this->count(['status' => 'cancelled']),
        ];
    }

    public function findRecentActivitiesWithImages(int $limit = 5): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.image IS NOT NULL')
            ->orderBy('a.created_at', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
