<?php

namespace App\Repository;

use App\Entity\Provenir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Provenir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Provenir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Provenir[]    findAll()
 * @method Provenir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProvenirRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Provenir::class);
    }

    // /**
    //  * @return Provenir[] Returns an array of Provenir objects
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
    public function findOneBySomeField($value): ?Provenir
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
