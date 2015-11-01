<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotedAdsPayment
 *
 * @ORM\Table(name="promoted_ads_payment", indexes={@ORM\Index(name="fk_id_ads_promo", columns={"id_ads"})})
 * @ORM\Entity
 */
class PromotedAdsPayment
{
    /**
     * @var string
     *
     * @ORM\Column(name="payment_code", type="string", length=50, nullable=false)
     */
    private $paymentCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=false)
     */
    private $paymentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration_date_promo", type="datetime", nullable=false)
     */
    private $expirationDatePromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_promoted_ads_payment", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotedAdsPayment;

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
     * Set paymentCode
     *
     * @param string $paymentCode
     * @return PromotedAdsPayment
     */
    public function setPaymentCode($paymentCode)
    {
        $this->paymentCode = $paymentCode;

        return $this;
    }

    /**
     * Get paymentCode
     *
     * @return string 
     */
    public function getPaymentCode()
    {
        return $this->paymentCode;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     * @return PromotedAdsPayment
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set expirationDatePromo
     *
     * @param \DateTime $expirationDatePromo
     * @return PromotedAdsPayment
     */
    public function setExpirationDatePromo($expirationDatePromo)
    {
        $this->expirationDatePromo = $expirationDatePromo;

        return $this;
    }

    /**
     * Get expirationDatePromo
     *
     * @return \DateTime 
     */
    public function getExpirationDatePromo()
    {
        return $this->expirationDatePromo;
    }

    /**
     * Get idPromotedAdsPayment
     *
     * @return integer 
     */
    public function getIdPromotedAdsPayment()
    {
        return $this->idPromotedAdsPayment;
    }

    /**
     * Set idAds
     *
     * @param \CPANA\ClassifiedsBundle\Entity\Ads $idAds
     * @return PromotedAdsPayment
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
