<?php

namespace App\Repository;

use App\Entity\StockUnique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StockUnique|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockUnique|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockUnique[]    findAll()
 * @method StockUnique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockUniqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockUnique::class);
    }

    // /**
    //  * @return StockUnique[] Returns an array of StockUnique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StockUnique
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
