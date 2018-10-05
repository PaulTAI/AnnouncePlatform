<?php
// src/OC/PlatformBundle/Entity/AdvertRepository.php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AdvertRepository extends EntityRepository
{
    public function myFindAll()
    {
      return $this
        ->createQueryBuilder('a')
        ->getQuery()
        ->getResult()
      ;
    }
}