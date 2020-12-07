<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\ProductType;
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

    /**
     * @return Product[] Returns an array of Product objects
     */

    public function filterData($name, $brand, $product_type, $price, $category)
    {
        return  $this->createQueryBuilder('p')
            ->innerJoin('p.productType',"pt")
            ->innerJoin('p.brand','b')
            ->innerJoin('p.category','c')
            ->Where('p.name LIKE :name')
            ->andWhere('b.id LIKE :brand')
            ->andWhere('c.id LIKE :category')
            ->andWhere('pt.id LIKE :product_type')
            ->andWhere('p.price LIKE :price')
            ->setParameter('name', '%'.$name.'%')
            ->setParameter('brand', '%'.$brand.'%')
            ->setParameter('product_type', '%'.$product_type.'%')
            ->setParameter('price', '%'.$price.'%')
            ->setParameter('category', '%'.$category.'%')
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findProductForReport($id)
    {
        return  $this->createQueryBuilder('p')
                ->select("p.name as product_name","p.description as description","p.price","b.name as brand","c.name as category","pt.name as productType")
                ->innerJoin('p.productType',"pt")
                ->innerJoin('p.brand','b')
                ->innerJoin('p.category','c')
                ->where("p.id = :id")
                ->setParameter('id', $id)
                ->getQuery()
                ->getOneOrNullResult()
            ;
    }
    

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
