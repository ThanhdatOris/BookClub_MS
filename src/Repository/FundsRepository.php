<?php

namespace App\Repository;

use App\Entity\Funds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<Funds>
 */
class FundsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Funds::class);
    }

//    /**
//     * @return Funds[] Returns an array of Funds objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Funds
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    public function findAllFundsQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('f')
            ->orderBy('f.date', 'DESC');
    }

    public function searchFunds($searchTerm)
    {
        return $this->createQueryBuilder('f')
            ->leftJoin('f.created_by', 'u')
            ->where('f.description LIKE :searchTerm')
            ->orWhere('f.transaction_type LIKE :searchTerm')
            ->orWhere('u.fullname LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('f.date', 'DESC')
            ->getQuery();
    }

    public function getTotalFundsByType($type)
    {
        return $this->createQueryBuilder('f')
            ->select('SUM(f.amount)')
            ->where('f.transaction_type = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    public function getFundsByDateRange(\DateTime $startDate, \DateTime $endDate)
    {
        return $this->createQueryBuilder('f')
            ->where('f.date BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('f.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function getMonthlyFunds($year)
    {
        return $this->createQueryBuilder('f')
            ->select('MONTH(f.date) as month')
            ->addSelect('SUM(CASE WHEN f.transaction_type = :income THEN f.amount ELSE 0 END) as income')
            ->addSelect('SUM(CASE WHEN f.transaction_type = :expense THEN f.amount ELSE 0 END) as expense')
            ->where('YEAR(f.date) = :year')
            ->setParameter('income', 'income')
            ->setParameter('expense', 'expense')
            ->setParameter('year', $year)
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
