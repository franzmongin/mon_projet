<?php

namespace App\Repository;

use App\Entity\Fake;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Fake|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fake|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fake[]    findAll()
 * @method Fake[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FakeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fake::class);
    }

    // /**
    //  * @return Fake[] Returns an array of Fake objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fake
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
