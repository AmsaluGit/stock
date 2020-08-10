<?php

namespace App\Repository;

use App\Entity\Stock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Stock|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stock|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stock[]    findAll()
 * @method Stock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stock::class);
    }

    public function findStock($search=null)
    {
        $qb=$this->createQueryBuilder('s');
       
        if($search)
        {
            $qb->innerJoin("s.product","p");
            $qb->andWhere("p.name  LIKE '%".$search."%'");
        }
            

         return           
        
         $qb->orderBy('s.date', 'asc')
          
               ->getQuery()
               ->getResult();
    }

    public function findStockInOut($search=null)
    {
        $qb=$this->createQueryBuilder('s')
        
        ->innerJoin("s.product","p")
        ->innerJoin("p.unitOfMeasure","uom");
        //->leftJoin('App:Order', 'o', 'WITH', 'o.product=p.id');
        
        if($search)
        {
            $qb->andWhere("p.name  LIKE '%".$search."%'");
        }
            

            return 
            
           
            $qb->orderBy('s.date', 'asc')
               //->select('sum(s.quantity) as quantity, sum(o.quantity) as oquantity, p.name as product, uom.name as unit,s.id as id, p.id as pid')
               ->select('sum(s.quantity) as quantity, p.name as product, uom.name as unit,s.id as id, p.id as pid')
               ->groupBy('p.id')
               ->getQuery()              
               ->getResult();
    }




    // /**
    //  * @return Stock[] Returns an array of Stock objects
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
    public function findOneBySomeField($value): ?Stock
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
