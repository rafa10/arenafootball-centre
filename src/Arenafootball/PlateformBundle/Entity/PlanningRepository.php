<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class PlanningRepository extends EntityRepository
{

// Depuis le repository d'planning

public function myFindDate($date)
{
  
  $qb = $this->createQueryBuilder('a');
  $qb->where('a.date BETWEEN :dateGo AND :dateEnd')
	 ->setParameter('dateGo', $dateGO->format('Y-m-d'))
     ->setParameter('dateEnd', $dateEnd->format('Y-m-d'));    

    return $qb->getQuery()->getResult();
}

}