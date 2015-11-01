<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regions
 *
 * @ORM\Table(name="regions", indexes={@ORM\Index(name="fk_id_country", columns={"id_country"})})
 * @ORM\Entity
 */
class Regions
{
    /**
     * @var string
     *
     * @ORM\Column(name="region_name", type="string", length=50, nullable=false)
     */
    private $regionName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_region", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_country", referencedColumnName="id_country")
     * })
     */
    private $idCountry;



    /**
     * Set regionName
     *
     * @param string $regionName
     * @return Regions
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    /**
     * Get regionName
     *
     * @return string 
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * Get idRegion
     *
     * @return integer 
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set idCountry
     *
     * @param \CPANA\ClassifiedsBundle\Entity\Countries $idCountry
     * @return Regions
     */
    public function setIdCountry(\CPANA\ClassifiedsBundle\Entity\Countries $idCountry = null)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return \CPANA\ClassifiedsBundle\Entity\Countries 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }
}
