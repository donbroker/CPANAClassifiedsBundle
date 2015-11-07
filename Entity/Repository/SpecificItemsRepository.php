<?php

namespace CPANA\ClassifiedsBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class SpecificItemsRepository extends EntityRepository
{
    public function findAllItemsCustom()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT  si.itemValue
						,IDENTITY(si.idAds)
						,ty.itemTypeName
				FROM CPANAClassifiedsBundle:SpecificItems si 
				JOIN si.idSpecificItemType ty'
				
            )
            ->getResult();
    }
}