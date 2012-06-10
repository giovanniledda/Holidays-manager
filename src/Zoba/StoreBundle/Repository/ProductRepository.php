<?php

namespace Zoba\StoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository {

    public function findAllOrderedByName() {

        return $this->createQueryBuilder('p')
                        ->orderBy('p.name', ' ASC')
                        ->getQuery()
                        ->getResult();
//        
//        return $this->getEntityManager()
//            ->createQuery('SELECT p FROM StoreBundle:Product p ORDER BY p.name ASC')
//            ->getResult();
    }

    public function findAllOrderedByNameJoinedToCategory() {

        return $this->createQueryBuilder('p')
                        ->leftJoin('p.category', 'c')
                        ->orderBy('p.name', ' ASC')
                        ->getQuery()
                        ->getResult();

//        return $this->getEntityManager()
//                        ->createQuery('SELECT p FROM StoreBundle:Product p JOIN p.category c ORDER BY p.name ASC')
//                        ->getResult();
    }

    public function findOneByIdJoinedToCategory($id) {

//        $query = $this->getEntityManager()
//                        ->createQuery('
//            SELECT p, c FROM StoreBundle:Product p
//            JOIN p.category c
//            WHERE p.id = :id'
//                        )->setParameter('id', $id);

        $query = $this->createQueryBuilder('p')
                ->innerJoin('p.category', 'c', 'WITH', 'p.id = :id')
                ->setParameter('id', $id)
                ->getQuery();
        
        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

}