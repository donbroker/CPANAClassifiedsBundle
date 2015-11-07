<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CityAreas
 *
 * @ORM\Table(name="city_areas", indexes={@ORM\Index(name="fk_id_city", columns={"id_city"})})
 * @ORM\Entity
 */
class CityAreas
{
    /**
     * @var string
     *
     * @ORM\Column(name="city_area_name", type="string", length=50, nullable=false)
     */
    private $cityAreaName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_city_area", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCityArea;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\Cities
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\Cities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_city", referencedColumnName="id_city")
     * })
     */
    private $idCity;



    /**
     * Set cityAreaName
     *
     * @param string $cityAreaName
     * @return CityAreas
     */
    public function setCityAreaName($cityAreaName)
    {
        $this->cityAreaName = $cityAreaName;

        return $this;
    }

    /**
     * Get cityAreaName
     *
     * @return string 
     */
    public function getCityAreaName()
    {
        return $this->cityAreaName;
    }

    /**
     * Get idCityArea
     *
     * @return integer 
     */
    public function getIdCityArea()
    {
        return $this->idCityArea;
    }

    /**
     * Set idCity
     *
     * @param \CPANA\ClassifiedsBundle\Entity\Cities $idCity
     * @return CityAreas
     */
    public function setIdCity(\CPANA\ClassifiedsBundle\Entity\Cities $idCity = null)
    {
        $this->idCity = $idCity;

        return $this;
    }

    /**
     * Get idCity
     *
     * @return \CPANA\ClassifiedsBundle\Entity\Cities 
     */
    public function getIdCity()
    {
        return $this->idCity;
    }
}
