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
    //this is constructor
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


    public function filterData($qua, $date, $prod, $comp, $store)
    {
        return  $this->createQueryBuilder('s')
            ->innerJoin('s.product',"p")
            ->innerJoin('s.store','store')
            ->innerJoin('s.company','c')
            ->Where('s.quantity LIKE :quantity')
            ->andWhere('store.id LIKE :store')
            ->andWhere('c.id LIKE :company')
            ->andWhere('s.date LIKE :date')
            ->andWhere('p.id LIKE :product')
            ->setParameter('quantity', '%'.$qua.'%')
            ->setParameter('store', '%'.$store.'%')
            ->setParameter('company', '%'.$comp.'%')
            ->setParameter('date', '%'.$date.'%')
            ->setParameter('product', '%'.$prod.'%')
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findTotalForProduct($id)
    {
        return  $this->createQueryBuilder('s')
            ->select("sum(s.quantity) as total")
            ->Join('s.product',"p")
            ->Where('p.id = :product')
            ->setParameter('product', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
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
