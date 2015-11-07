<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cities
 *
 * @ORM\Table(name="cities", indexes={@ORM\Index(name="fk_id_region", columns={"id_region"})})
 * @ORM\Entity
 */
class Cities
{
    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=50, nullable=false)
     */
    private $cityName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_city", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCity;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\Regions
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\Regions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_region", referencedColumnName="id_region")
     * })
     */
    private $idRegion;



    /**
     * Set cityName
     *
     * @param string $cityName
     * @return Cities
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string 
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Get idCity
     *
     * @return integer 
     */
    public function getIdCity()
    {
        return $this->idCity;
    }

    /**
     * Set idRegion
     *
     * @param \CPANA\ClassifiedsBundle\Entity\Regions $idRegion
     * @return Cities
     */
    public function setIdRegion(\CPANA\ClassifiedsBundle\Entity\Regions $idRegion = null)
    {
        $this->idRegion = $idRegion;

        return $this;
    }

    /**
     * Get idRegion
     *
     * @return \CPANA\ClassifiedsBundle\Entity\Regions 
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }
}
