<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecificItemsTypes
 *
 * @ORM\Table(name="specific_items_types")
 * @ORM\Entity
 */
class SpecificItemsTypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="item_type_name", type="string", length=50, nullable=true)
     */
    private $itemTypeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_specific_item_type", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificItemType;



    /**
     * Set itemTypeName
     *
     * @param string $itemTypeName
     * @return SpecificItemsTypes
     */
    public function setItemTypeName($itemTypeName)
    {
        $this->itemTypeName = $itemTypeName;

        return $this;
    }

    /**
     * Get itemTypeName
     *
     * @return string 
     */
    public function getItemTypeName()
    {
        return $this->itemTypeName;
    }

    /**
     * Get idSpecificItemType
     *
     * @return integer 
     */
    public function getIdSpecificItemType()
    {
        return $this->idSpecificItemType;
    }
}
