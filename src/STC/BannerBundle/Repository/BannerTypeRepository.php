<?php

namespace STC\BannerBundle\Repository;

use STC\BannerBundle\Entity\Banner;

use Doctrine\ORM\EntityRepository;

/**
 * BannerTypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BannerTypeRepository extends EntityRepository
{
	public function findEnabledByType($position)
	{
		$query = $this->createQueryBuilder('bt')
		->andWhere('bt.position =:position')
		->andWhere('bt.enabled =:enabled')
		->setParameter('position', $position)
		->setParameter('enabled', Banner::ENABLED_YES);
		return $query->getQuery()->getResult();

	}
}