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

    public function getTotalIncome(): float
    {
        return (float) $this->createQueryBuilder('f')
            ->select('COALESCE(SUM(f.amount), 0)')
            ->where('f.transaction_type = :type')
            ->setParameter('type', 'income')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getTotalExpense(): float
    {
        return (float) $this->createQueryBuilder('f')
            ->select('COALESCE(SUM(ABS(f.amount)), 0)')
            ->where('f.transaction_type = :type')
            ->setParameter('type', 'expense')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getAvailableYears(): array
    {
        $years = $this->createQueryBuilder('f')
            ->select('DISTINCT YEAR(f.date) as year')
            ->orderBy('year', 'DESC')
            ->getQuery()
            ->getArrayResult();

        return array_column($years, 'year');
    }

    public function getChartData(int $year, ?int $month, string $type): array
    {
        $qb = $this->createQueryBuilder('f')
            ->where('YEAR(f.date) = :year')
            ->setParameter('year', $year);

        if ($month !== null) {
            $qb->andWhere('MONTH(f.date) = :month')
               ->setParameter('month', $month);
        }

        if ($type === 'income' || $type === 'expense') {
            $qb->andWhere('f.transaction_type = :type')
               ->setParameter('type', $type);
        }

        return $qb->select("MONTH(f.date) as month, 
                          SUM(CASE WHEN f.transaction_type = 'income' THEN f.amount ELSE 0 END) as income,
                          SUM(CASE WHEN f.transaction_type = 'expense' THEN ABS(f.amount) ELSE 0 END) as expense")
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function getFundsBetweenDates(\DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder('f')
            ->select('f.date', 'f.transaction_type', 'SUM(f.amount) as total')
            ->where('f.date BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->groupBy('f.date', 'f.transaction_type')
            ->orderBy('f.date', 'ASC')
            ->getQuery()
            ->getResult();
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
