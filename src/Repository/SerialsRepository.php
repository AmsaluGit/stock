<?php

namespace App\Repository;

use App\Entity\Serials;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Serails|null find($id, $lockMode = null, $lockVersion = null)
 * @method Serails|null findOneBy(array $criteria, array $orderBy = null)
 * @method Serails[]    findAll()
 * @method Serails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SerialsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Serials::class);
    }

    // /**
    //  * @return Serails[] Returns an array of Serails objects
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
    public function findOneBySomeField($value): ?Serails
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
