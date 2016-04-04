<?php
// src/OC/PlatformBundle/Entity/AdvertRepository.php

namespace Arenafootball\PlatformBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ImagesRepository extends EntityRepository
{
  public function myFindOne($id)
  {
    $qb = $this->createQueryBuilder('a');

    $qb
      ->where('a.id = :id')
      ->setParameter('id', $id)
    ;

    return $qb
      ->getQuery()
      ->getResult()
    ;
  }
}