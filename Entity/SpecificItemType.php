<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecificItemType
 *
 * @ORM\Table(name="specific_item_type")
 * @ORM\Entity
 */
class SpecificItemType
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_name", type="string", length=255, nullable=false)
     */
    private $typeName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set typeName
     *
     * @param string $typeName
     * @return SpecificItemType
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get typeName
     *
     * @return string 
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SpecificItemType
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
