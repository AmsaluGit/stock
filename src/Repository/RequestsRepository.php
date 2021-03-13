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
        $qb =  $this->createQueryBuilder('r');
        $qb =   $qb->andWhere('r.requester = :req')
            ->setParameter('req', $userId);

           $qb =   $qb->andWhere('r.status is NULL or r.status =:zero')
            ->setParameter('zero', 0)
            ->orderBy('r.id', 'DESC')
            ->getQuery()
            ->getOneOrNullResult()
         
        ;
        return $qb ;
    }
    
    public function findByName($value, $mylevel)
    {
         $q = $this->createQueryBuilder('r')
            ->join('r.requester', 'requester')
            ->where('requester.firstName like :val');
if($mylevel)
{
    $q =$q->andwhere('r.currentApprovalStep >= '.($mylevel - 1));
}
          
            
            // ->where('CONCAT(requester.firstName," ",requester.middleName," ",requester.lastName) LIKE :val')
            $q =$q->setParameter('val', '%'.$value.'%')
            ->orderBy('r.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;

        return $q;
    }
}
