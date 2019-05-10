<?php

namespace App\Repository;

use App\Entity\Cookies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cookies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cookies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cookies[]    findAll()
 * @method Cookies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CookiesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cookies::class);
    }

    // /**
    //  * @return Cookies[] Returns an array of Cookies objects
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
    public function findOneBySomeField($value): ?Cookies
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
