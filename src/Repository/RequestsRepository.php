<?php

namespace App\Repository;

use App\Entity\Requests;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Requests|null find($id, $lockMode = null, $lockVersion = null)
 * @method Requests|null findOneBy(array $criteria, array $orderBy = null)
 * @method Requests[]    findAll()
 * @method Requests[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Requests::class);
    }

    // /**
    //  * @return Requests[] Returns an array of Requests objects
    //  */
    
    public function getIfNewRequestsExist($userId)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.requester = :req')
            ->setParameter('req', $userId)
            ->andWhere('r.approval1 is NULL and r.approval2 is NULL and approval3 is NULL')
            ->andWhere('r.status is NULL or r.status =:zero')
            ->setParameter('zero', 0)
            ->andWhere('r.closed is NULL or r.status =:zero2')
            ->setParameter('zero2', 0)
            ->orderBy('r.id', 'DESC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getOneOrNullResult()
            // ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Requests
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
