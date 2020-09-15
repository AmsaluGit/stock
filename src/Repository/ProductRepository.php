<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }
    public function findProduct($search=null)
    {
        $qb=$this->createQueryBuilder('p');
        if($search)
            $qb->andWhere("p.name  LIKE '%".$search."%'");

            return 
            $qb->orderBy('p.id', 'ASC')
            ->getQuery()
     
        ;
    }

    public function count($t)
    {
        return $this
            ->createQueryBuilder('product')
            ->select("count(product.id)")
            ->getQuery()
            ->getSingleScalarResult();
    }


    public function getRequiredDTData($start, $length, $orders, $search, $columns)
    {
        $searchItem = $search['value'];
        $columnNum = $orders[0]['column'];
        $orderColumn = $columns[$columnNum]['data'];
        $orderDir = $orders[0]['dir'];

        // Create Main Query
        $query = $this->createQueryBuilder('product');
    
        // Create Count Query
        $countQuery = $this->createQueryBuilder('product');
        $countQuery->select('COUNT(product)');
        
        // Create inner joins
        $query
            ->join('product.brand', 'brand')
            ->join('product.category', 'category');
        
        $countQuery
            ->join('product.brand', 'brand')
            ->join('product.category', 'category');
        
        //if all columns are from the same table you can use this

        // $count = sizeof($columns);
        // $flag = 0;

        
        // $searchQuery = "";
        // for ($i = 0; $i < $count; $i++)
        // {
        //     if($columns[$i]['searchable'] and ++$flag != $count)
        //         $searchQuery .= 'product.'.$columns[$i]['data'].' LIKE \'%'.$searchItem.'%\' or ';
        //     else if($columns[$i]['searchable'])
        //         $searchQuery .= 'product.'.$columns[$i]['data'].' LIKE \'%'.$searchItem.'%\'';
        // }

        // if ($searchQuery !== null)
        // {
        //     $query->andWhere($searchQuery);
        //     $countQuery->andWhere($searchQuery);
        // }
        //     }
        // }



        $searchQuery =  'product.name LIKE \'%'.$searchItem.'%\'
                         or product.description LIKE \'%'.$searchItem.'%\' 
                         or product.price LIKE \'%'.$searchItem.'%\'
                         or brand.name LIKE \'%'.$searchItem.'%\'
                         or category.name LIKE \'%'.$searchItem.'%\'
                         ';


        $query->Where($searchQuery);
        $countQuery->Where($searchQuery);
        
        //order
        if($columns[$columnNum]['data'] == "bname")
            $query->orderBy("brand.name",$orderDir);
        elseif($columns[$columnNum]['data'] == "cname")                
            $query->orderBy("category.name",$orderDir);
        else        
            $query->orderBy("product.$orderColumn",$orderDir);

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);
        
        // Execute
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();
        
        return array(
            "results"       => $results,
            "countResult"   => $countResult
        );
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
