<?php

namespace CPANA\ClassifiedsBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class AdsRepository extends EntityRepository
{
    public function findAllAdsCustom()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT  a.idAds, a.title, a.description, a.price
				,u.name
				,cat.categoryName
				,c.currencyName
				,ca.cityAreaName
				,city.cityName
				FROM CPANAClassifiedsBundle:Ads a 
				JOIN a.idUser u 
				JOIN a.idCategory cat
				JOIN a.idCurrency c 
				JOIN a.idCityArea ca
				JOIN ca.idCity city'
				
            )
            ->getResult();
    }
	
	public function findOneWithoutJOIN($id)
    {
        $query =	$this->getEntityManager()
            ->createQuery(
                'SELECT a FROM CPANAClassifiedsBundle:Ad a  WHERE a.id= :id'
				
            );
		$query->setParameter('id', $id);
		$result = $query->getResult();
		
		return $result;
    }
	public function findByIdAdWithSpecificItems($id)
    {
        $query =	$this->getEntityManager()
            ->createQuery(
                'SELECT a,p FROM CPANAClassifiedsBundle:Ad a JOIN a.items p WHERE a.id= :id'
				
            );
		$query->setParameter('id', $id);
		$result = $query->getResult();
		
		return $result;
    }
}