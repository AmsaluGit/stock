<?php

namespace App\Repository;

use App\Entity\TransfersApprovalLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TransfersApprovalLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransfersApprovalLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransfersApprovalLog[]    findAll()
 * @method TransfersApprovalLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransfersApprovalLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransfersApprovalLog::class);
    }

    // /**
    //  * @return TransfersApprovalLog[] Returns an array of TransfersApprovalLog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TransfersApprovalLog
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
