<?php

namespace App\Repository;

use App\Entity\TransferedItemsGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TransferedItemsGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransferedItemsGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransferedItemsGroup[]    findAll()
 * @method TransferedItemsGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransferedItemsGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransferedItemsGroup::class);
    }

    // /**
    //  * @return TransferedItemsGroup[] Returns an array of TransferedItemsGroup objects
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
    public function findOneBySomeField($value): ?TransferedItemsGroup
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function get($id)
    {
        return  $this->createQueryBuilder('t')
                ->select('to.id as to_id','u.firstName', 'u.middleName', 'u.lastName','to.firstName as tfname', "to.middleName as tmname", "to.lastName as tlname", 't.date', 't.status', 't.id', 'u.id as sender_id')
                ->innerJoin('t.from','u')
                ->innerJoin("t.to",'to')
                ->where('t.id = :id')
                ->setParameter("id",$id)
                ->getQuery()
                ->getOneOrNullResult()
        ;
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
                ->innerJoin('t.from', 'f')
                ->innerJoin('t.to','u')
                ->LeftJoin('t.approvedBy','appBy')
                ->where("f.id = :id")
                ->setParameter("id",$id)  
                ->orderBy("t.status","asc")
                ->getQuery()
                ->getArrayResult()
            ;
    }

    public function filterGroup($group,$approval_level)
    {
    
        if($approval_level == 3)
        {
            if($group == ""){
                return $this->createQueryBuilder('t')
                    ->select("t.id", 'to.firstName', 'to.middleName', 'to.lastName', 'f.firstName as ffname', 'f.middleName as fmname', 'f.lastName as flname','t.date','t.status','t.group_id')
                    ->innerJoin("t.from", 'f')
                    ->innerJoin("t.to", 'to')
                    ->where("t.status = :status")
                    ->orWhere("t.status = 4")
                    ->setParameter("status",$approval_level)
                    ->orderBy("t.date","desc")
                    ->getQuery()
                    ->getResult()
                    ;
            }
            
            return $this->createQueryBuilder('t')
                ->select("t.id", 'to.firstName', 'to.middleName', 'to.lastName', 'f.firstName as ffname', 'f.middleName as fmname', 'f.lastName as flname','t.date','t.status', 't.group_id')
                ->innerJoin("t.from", 'f')
                ->innerJoin("t.to", 'to')
                ->Where('t.group_id = :group')
                ->orWhere("t.status = 4")
                ->orWhere("t.status = :status")
                ->setParameter('group', $group)
                ->setParameter("status",$approval_level)
                ->orderBy("t.date","desc")
                ->getQuery()
                ->getResult()
                ;       
        }
        
        if($group == ""){
            return $this->createQueryBuilder('t')
                ->select("t.id", 'to.firstName', 'to.middleName', 'to.lastName', 'f.firstName as ffname', 'f.middleName as fmname', 'f.lastName as flname','t.date','t.status','t.group_id')
                ->innerJoin("t.from", 'f')
                ->innerJoin("t.to", 'to')
                ->where("t.status = :status")
                ->setParameter("status",$approval_level)
                ->orderBy("t.date","desc")
                ->getQuery()
                ->getResult()
                ;
        }
        return $this->createQueryBuilder('t')
                ->select("t.id", 'to.firstName', 'to.middleName', 'to.lastName', 'f.firstName as ffname', 'f.middleName as fmname', 'f.lastName as flname','t.date','t.status', 't.group_id')
                ->innerJoin("t.from", 'f')
                ->innerJoin("t.to", 'to')
                ->Where('t.group_id = :group')
                ->andWhere("t.status = :status")
                ->setParameter("status", $approval_level)
                ->setParameter('group', $group)
                ->orderBy("t.date","desc")
                ->getQuery()
                ->getResult()
                ;
                
    }
}