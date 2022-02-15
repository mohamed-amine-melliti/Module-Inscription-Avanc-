<?php

namespace App\Repository;

use App\Entity\Testes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Testes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Testes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Testes[]    findAll()
 * @method Testes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Testes::class);
    }

    // /**
    //  * @return Testes[] Returns an array of Testes objects
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
    public function findOneBySomeField($value): ?Testes
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
