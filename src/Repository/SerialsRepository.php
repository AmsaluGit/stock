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

    //get all items registered with the respected user
    public function getSerial($id)
    {
        return  $this->createQueryBuilder('s')
                ->select("s.id", "p.name", "s.serial", "s.model as model_number", "o.model", 'r.requestedDate')
                ->innerJoin('s.orders',"o")
                ->innerJoin('o.request','r')
                ->innerJoin('o.stock', 'stock')
                ->innerJoin('stock.product', 'p')
                ->innerJoin('r.requester','requester')
                ->where("requester.id = :id")
                ->andwhere("s.transfer_request = :tr")
                ->andWhere("p.canTransfered = :ct")                
                ->setParameters(["tr"=> 0,'id'=> $id,'ct'=>1])
                ->getQuery()
                ->getArrayResult()
            ;
    }

    //get all selected items to transfer based on serials.id
    public function getSelectedSerialsInfo($id)
    {
        // dump($id);
        // die();
        return  $this->createQueryBuilder('s')
                ->select("s.id", "p.name", "s.serial", "s.model as model_number", "o.model", 'r.requestedDate')
                ->innerJoin('s.orders',"o")
                ->innerJoin('o.request','r')
                ->innerJoin('o.stock', 'stock')
                ->innerJoin('stock.product', 'p')
                ->innerJoin('r.requester','requester')
                ->where("s.id = :id")
                ->setParameters(array("id"=>array($id)))
                ->getQuery()
                // ->getResult()
            ;
    }
}
