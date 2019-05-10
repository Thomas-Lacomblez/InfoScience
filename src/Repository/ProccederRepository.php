<?php

namespace App\Repository;

use App\Entity\Procceder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Procceder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Procceder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Procceder[]    findAll()
 * @method Procceder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProccederRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Procceder::class);
    }

    // /**
    //  * @return Procceder[] Returns an array of Procceder objects
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
    public function findOneBySomeField($value): ?Procceder
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
