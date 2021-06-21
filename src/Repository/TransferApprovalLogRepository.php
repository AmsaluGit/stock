<?php

namespace App\Repository;

use App\Entity\TransferApprovalLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TransferApprovalLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransferApprovalLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransferApprovalLog[]    findAll()
 * @method TransferApprovalLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransferApprovalLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransferApprovalLog::class);
    }

    // /**
    //  * @return TransferApprovalLog[] Returns an array of TransferApprovalLog objects
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
    public function findOneBySomeField($value): ?TransferApprovalLog
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
