<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ItemRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class ItemRepository extends EntityRepository
{
	public function deleteAll()
    {
        $this->getEntityManager()->createQuery('DELETE FROM AppBundle:Item')
        ->execute();
    }
}
