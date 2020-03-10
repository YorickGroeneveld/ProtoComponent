<?php

namespace App\Repository;

use App\Entity\Grafkaart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Grafkaart|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grafkaart|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grafkaart[]    findAll()
 * @method Grafkaart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrafkaartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Grafkaart::class);
    }

    // /**
    //  * @return Grafkaart[] Returns an array of Grafkaart objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Grafkaart
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
