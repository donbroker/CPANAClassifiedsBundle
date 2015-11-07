<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecificItem
 *
 * @ORM\Table(name="specific_item")
 * @ORM\Entity
 */
class SpecificItem
{
    /**
     * @var \stdClass
     *
     * @ORM\Column(name="type", type="object", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="ad", type="object", nullable=false)
     */
    private $ad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set type
     *
     * @param \stdClass $type
     * @return SpecificItem
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \stdClass 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return SpecificItem
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set ad
     *
     * @param \stdClass $ad
     * @return SpecificItem
     */
    public function setAd($ad)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Get ad
     *
     * @return \stdClass 
     */
    public function getAd()
    {
        return $this->ad;
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
