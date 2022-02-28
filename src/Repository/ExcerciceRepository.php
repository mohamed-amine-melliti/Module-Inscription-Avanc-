<?php

namespace App\Repository;

use App\Entity\Excercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Excercice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excercice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excercice[]    findAll()
 * @method Excercice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excercice::class);
    }

    // /**
    //  * @return Excercice[] Returns an array of Excercice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Excercice
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
