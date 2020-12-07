<?php

namespace App\Repository;

use App\Entity\Orders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Order|null find($id, $lockMode = null, $lockVersion = null)
 * @method Order|null findOneBy(array $criteria, array $orderBy = null)
 * @method Order[]    findAll()
 * @method Order[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Orders::class);
    }

    // /**
    //  * @return Order[] Returns an array of Order objects
    //  */
    
    // public function findByExampleField($value)
    // {
    //     return $this->createQueryBuilder('o')
    //         ->andWhere('o.exampleField = :val')
    //         ->setParameter('val', $value)
    //         ->orderBy('o.id', 'ASC')
    //         ->setMaxResults(10)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }

    public function productTotalOrder($product_id)
    {
        return $this->createQueryBuilder('o')
            ->select("sum(o.quantity) as total_order") 
            ->join('o.product','p')
            ->Where('p.id = :val')
            ->setParameter('val', $product_id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function productTotalApproved($product_id)
    {
        return $this->createQueryBuilder('o')
            ->select("sum(o.quantity) as total_order") 
            ->join('o.product','p')
            ->join('o.request','r')
            ->Where('p.id = :val')
            ->andWhere('r.closed = 1')
            ->setParameter('val', $product_id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
