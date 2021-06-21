<?php

namespace App\Repository;

use App\Entity\ApprovalLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ApprovalLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApprovalLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApprovalLog[]    findAll()
 * @method ApprovalLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApprovalLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApprovalLog::class);
    }

    // /**
    //  * @return ApprovalLog[] Returns an array of ApprovalLog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ApprovalLog
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
