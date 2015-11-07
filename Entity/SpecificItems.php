<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecificItems
 *
 * @ORM\Table(name="specific_items", indexes={@ORM\Index(name="fk_id_ads", columns={"id_ads"}), @ORM\Index(name="fk_id_specific_item_types", columns={"id_specific_item_type"})})
 * @ORM\Entity(repositoryClass="CPANA\ClassifiedsBundle\Entity\Repository\SpecificItemsRepository")
 */
class SpecificItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="item_value", type="string", length=50, nullable=false)
     */
    private $itemValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_specific_item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificItem;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\SpecificItemsTypes
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\SpecificItemsTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_specific_item_type", referencedColumnName="id_specific_item_type")
     * })
     */
    private $idSpecificItemType;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\Ads
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\Ads")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ads", referencedColumnName="id_ads")
     * })
     */
    private $idAds;



    /**
     * Set itemValue
     *
     * @param string $itemValue
     * @return SpecificItems
     */
    public function setItemValue($itemValue)
    {
        $this->itemValue = $itemValue;

        return $this;
    }

    /**
     * Get itemValue
     *
     * @return string 
     */
    public function getItemValue()
    {
        return $this->itemValue;
    }

    /**
     * Get idSpecificItem
     *
     * @return integer 
     */
    public function getIdSpecificItem()
    {
        return $this->idSpecificItem;
    }

    /**
     * Set idSpecificItemType
     *
     * @param \CPANA\ClassifiedsBundle\Entity\SpecificItemsTypes $idSpecificItemType
     * @return SpecificItems
     */
    public function setIdSpecificItemType(\CPANA\ClassifiedsBundle\Entity\SpecificItemsTypes $idSpecificItemType = null)
    {
        $this->idSpecificItemType = $idSpecificItemType;

        return $this;
    }

    /**
     * Get idSpecificItemType
     *
     * @return \CPANA\ClassifiedsBundle\Entity\SpecificItemsTypes 
     */
    public function getIdSpecificItemType()
    {
        return $this->idSpecificItemType;
    }

    /**
     * Set idAds
     *
     * @param \CPANA\ClassifiedsBundle\Entity\Ads $idAds
     * @return SpecificItems
     */
    public function setIdAds(\CPANA\ClassifiedsBundle\Entity\Ads $idAds = null)
    {
        $this->idAds = $idAds;

        return $this;
    }

    /**
     * Get idAds
     *
     * @return \CPANA\ClassifiedsBundle\Entity\Ads 
     */
    public function getIdAds()
    {
        return $this->idAds;
    }
}
