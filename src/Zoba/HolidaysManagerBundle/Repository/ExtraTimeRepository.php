<?php

namespace Zoba\HolidaysManagerBundle\ExtraTime;

use Doctrine\ORM\EntityExtraTime;

/**
 * ExtraTimeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ExtraTimeRepository extends EntityRepository {

    public function findAllOrderedByDate($criteria = 'ASC') {

        return $this->createQueryBuilder('et')
                        ->orderBy('et.date', $criteria)
                        ->getQuery()
                        ->getResult();
    }
}