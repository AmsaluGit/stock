<?php

namespace App\Repository;

use App\Entity\Transfer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Transfer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transfer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transfer[]    findAll()
 * @method Transfer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransferRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transfer::class);
    }

    public function getTransferRequests($id)
    {
        return  $this->createQueryBuilder('t')
                ->select("t.id", "p.name", "u.firstName as fname", "u.middleName as mname", "u.lastName lname", "appBy.firstName", "appBy.middleName", "appBy.lastName", "s.model", "s.serial", 't.date', 't.status')
                ->innerJoin("t.serial",'s')
                ->innerJoin('s.orders',"o")
                ->innerJoin('o.request','r')
                ->innerJoin('o.stock', 'stock')
                ->innerJoin('stock.product','p')
                ->innerJoin('t.to', 'u')
                ->LeftJoin('t.approvedBy','appBy')
                ->where("u.id = :id")
                ->setParameter("id",$id)  
                ->getQuery()
                ->getArrayResult()
            ;
    }

    public function findTransferRequests()
    {
        // return  $this->createQueryBuilder('t')
        //              ->
    }

    // /**
    //  * @return Transfer[] Returns an array of Transfer objects
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
    public function findOneBySomeField($value): ?Transfer
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
