<?php

namespace App\Repository;

use App\Entity\ItemApprovalStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ItemApprovalStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemApprovalStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemApprovalStatus[]    findAll()
 * @method ItemApprovalStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemApprovalStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItemApprovalStatus::class);
    }

    // /**
    //  * @return ItemApprovalStatus[] Returns an array of ItemApprovalStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ItemApprovalStatus
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
