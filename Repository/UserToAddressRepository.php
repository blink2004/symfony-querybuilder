<?php

namespace App\Repository;

use App\Entity\UserToAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserToAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserToAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserToAddress[]    findAll()
 * @method UserToAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserToAddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserToAddress::class);
    }

    // /**
    //  * @return UserToAddress[] Returns an array of UserToAddress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserToAddress
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
