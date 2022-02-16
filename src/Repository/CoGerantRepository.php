<?php

namespace App\Repository;

use App\Entity\CoGerant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CoGerant|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoGerant|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoGerant[]    findAll()
 * @method CoGerant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoGerantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoGerant::class);
    }

    // /**
    //  * @return CoGerant[] Returns an array of CoGerant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoGerant
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
