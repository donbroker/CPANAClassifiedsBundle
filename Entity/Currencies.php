<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencies
 *
 * @ORM\Table(name="currencies")
 * @ORM\Entity
 */
class Currencies
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="base_currency", type="boolean", nullable=false)
     */
    private $baseCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="convertion_rate", type="float", precision=10, scale=2, nullable=false)
     */
    private $convertionRate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_name", type="string", length=30, nullable=false)
     */
    private $currencyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_currency", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurrency;



    /**
     * Set baseCurrency
     *
     * @param boolean $baseCurrency
     * @return Currencies
     */
    public function setBaseCurrency($baseCurrency)
    {
        $this->baseCurrency = $baseCurrency;

        return $this;
    }

    /**
     * Get baseCurrency
     *
     * @return boolean 
     */
    public function getBaseCurrency()
    {
        return $this->baseCurrency;
    }

    /**
     * Set convertionRate
     *
     * @param float $convertionRate
     * @return Currencies
     */
    public function setConvertionRate($convertionRate)
    {
        $this->convertionRate = $convertionRate;

        return $this;
    }

    /**
     * Get convertionRate
     *
     * @return float 
     */
    public function getConvertionRate()
    {
        return $this->convertionRate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Currencies
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set currencyName
     *
     * @param string $currencyName
     * @return Currencies
     */
    public function setCurrencyName($currencyName)
    {
        $this->currencyName = $currencyName;

        return $this;
    }

    /**
     * Get currencyName
     *
     * @return string 
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }
}
