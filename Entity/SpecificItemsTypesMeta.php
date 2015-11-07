<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecificItemsTypesMeta
 *
 * @ORM\Table(name="specific_items_types_meta", indexes={@ORM\Index(name="fk_id_category", columns={"id_category"}), @ORM\Index(name="fk_id_specific_item_type", columns={"id_specific_item_type"})})
 * @ORM\Entity
 */
class SpecificItemsTypesMeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_specific_meta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificMeta;

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
     * @var \CPANA\ClassifiedsBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_category", referencedColumnName="id_category")
     * })
     */
    private $idCategory;



    /**
     * Get idSpecificMeta
     *
     * @return integer 
     */
    public function getIdSpecificMeta()
    {
        return $this->idSpecificMeta;
    }

    /**
     * Set idSpecificItemType
     *
     * @param \CPANA\ClassifiedsBundle\Entity\SpecificItemsTypes $idSpecificItemType
     * @return SpecificItemsTypesMeta
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
     * Set idCategory
     *
     * @param \CPANA\ClassifiedsBundle\Entity\Category $idCategory
     * @return SpecificItemsTypesMeta
     */
    public function setIdCategory(\CPANA\ClassifiedsBundle\Entity\Category $idCategory = null)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \CPANA\ClassifiedsBundle\Entity\Category 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}
