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
                ->select("tr.id", "u.firstName as fname", "u.middleName as mname", "u.lastName lname", 'tr.date', 'tr.status', "count(t.group) as total", 'tr.group_id')
                ->innerJoin('t.group',"tr")
                ->innerJoin('tr.from', 'f')
                ->innerJoin('tr.to','u')
                ->where("f.id = :id")
                ->setParameter("id",$id)
                ->groupBy("t.group")  
                ->getQuery()
                ->getArrayResult()
            ;
    }


    public function getTransferRequestsReceiver($id)
    {
        return  $this->createQueryBuilder('t')
                ->select("tr.id", "u.firstName as fname", "u.middleName as mname", "u.lastName lname", 'tr.date',  "count(t.group) as total", 'tr.status', 'tr.group_id')
                ->innerJoin('t.group',"tr")
                ->innerJoin('tr.from', 'u')
                ->innerJoin('tr.to','to')
                ->where("to.id = :id")
                ->setParameter("id",$id)
                ->groupBy("t.group")  
                ->getQuery()
                ->getArrayResult()
            ;
    }

    public function getItemsList($id, $approval_level)
    {
        if($approval_level == 3)
        {
            return  $this->createQueryBuilder('t')
                ->select("t.id", "p.name",  "s.model", "s.serial")
                ->innerJoin("t.serial",'s')
                ->innerJoin("t.group", "g")
                ->innerJoin('s.orders',"o")
                ->innerJoin('o.request','r')
                ->innerJoin('o.stock', 'stock')
                ->innerJoin('stock.product','p')
                ->where("t.group = :group")
                // ->andwhere("g.status = :status")
                // ->orWhere("g.status = 4")
                // ->setParameter("status",$approval_level)
                ->setParameter("group",$id)  
                ->getQuery()
                ->getArrayResult()
            ;
        }
        return  $this->createQueryBuilder('t')
                ->select("t.id", "p.name",  "s.model", "s.serial")
                ->innerJoin("t.serial",'s')
                ->innerJoin("t.group", "g")
                ->innerJoin('s.orders',"o")
                ->innerJoin('o.request','r')
                ->innerJoin('o.stock', 'stock')
                ->innerJoin('stock.product','p')
                ->where("t.group = :group")
                // ->andwhere("g.status <= :status")
                // ->setParameter("status",$approval_level)
                ->setParameter("group",$id)  
                ->getQuery()
                ->getArrayResult()
            ;
    }

    public function getItemsPrint($id)
    {        return  $this->createQueryBuilder('t')
                ->select("t.id", "p.name",  "s.model", "s.serial","stock.price","u.name as uom")
                ->innerJoin("t.serial",'s')
                ->innerJoin('s.orders',"o")
                ->innerJoin('o.request','r')
                ->innerJoin('o.stock', 'stock')
                ->innerJoin('stock.product','p')
                ->innerJoin("p.unitOfMeasure","u")
                ->where("t.group = :group")
                ->setParameter("group",$id)  
                ->getQuery()
                ->getArrayResult()
            ;
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
