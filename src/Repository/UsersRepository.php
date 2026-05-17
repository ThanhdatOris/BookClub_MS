<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Users>
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    public function findAllOrderedByIdAndStatus(): array
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.status', 'ASC')
            ->addOrderBy('u.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function searchUsers(?string $search)
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.status', 'ASC')
            ->addOrderBy('u.id', 'DESC');

        if ($search) {
            $qb->andWhere('u.name LIKE :search OR u.student_id LIKE :search OR u.email LIKE :search OR u.faculty LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        return $qb->getQuery()->getResult();
    }

    public function getUsersStatistics(): array
    {
        return [
            'total' => $this->count([]),
            'active' => $this->count(['status' => 'active']),
            'inactive' => $this->count(['status' => 'inactive']),
            'admin' => $this->count(['role' => 'ROLE_ADMIN']),
            'treasurer' => $this->count(['role' => 'ROLE_TREASURER']),
            'member' => $this->count(['role' => 'ROLE_MEMBER']),
        ];
    }
}
