<?php

namespace CPANA\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ads
 *
 * @ORM\Table(name="ads", indexes={@ORM\Index(name="fk_id_user", columns={"id_user"}), @ORM\Index(name="fk_id_city_area", columns={"id_city_area"}), @ORM\Index(name="fk_id_currency", columns={"id_currency"})})
 * @ORM\Entity
 */
class Ads
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="bigint", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="path_photos", type="string", length=1024, nullable=true)
     */
    private $pathPhotos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=false)
     */
    private $expiresAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spam", type="boolean", nullable=false)
     */
    private $spam;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ads", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAds;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\Currencies
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\Currencies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_currency", referencedColumnName="id_currency")
     * })
     */
    private $idCurrency;

    /**
     * @var \CPANA\ClassifiedsBundle\Entity\CityAreas
     *
     * @ORM\ManyToOne(targetEntity="CPANA\ClassifiedsBundle\Entity\CityAreas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_city_area", referencedColumnName="id_city_area")
     * })
     */
    private $idCityArea;



    /**
     * Set title
     *
     * @param string $title
     * @return Ads
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ads
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
     * Set price
     *
     * @param integer $price
     * @return Ads
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Ads
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return Ads
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set pathPhotos
     *
     * @param string $pathPhotos
     * @return Ads
     */
    public function setPathPhotos($pathPhotos)
    {
        $this->pathPhotos = $pathPhotos;

        return $this;
    }

    /**
     * Get pathPhotos
     *
     * @return string 
     */
    public function getPathPhotos()
    {
        return $this->pathPhotos;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Ads
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set expiresAt
     *
     * @param \DateTime $expiresAt
     * @return Ads
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * Get expiresAt
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Set spam
     *
     * @param boolean $spam
     * @return Ads
     */
    public function setSpam($spam)
    {
        $this->spam = $spam;

        return $this;
    }

    /**
     * Get spam
     *
     * @return boolean 
     */
    public function getSpam()
    {
        return $this->spam;
    }

    /**
     * Get idAds
     *
     * @return integer 
     */
    public function getIdAds()
    {
        return $this->idAds;
    }

    /**
     * Set idUser
     *
     * @param \CPANA\ClassifiedsBundle\Entity\FosUser $idUser
     * @return Ads
     */
    public function setIdUser(\CPANA\ClassifiedsBundle\Entity\FosUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \CPANA\ClassifiedsBundle\Entity\FosUser 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idCurrency
     *
     * @param \CPANA\ClassifiedsBundle\Entity\Currencies $idCurrency
     * @return Ads
     */
    public function setIdCurrency(\CPANA\ClassifiedsBundle\Entity\Currencies $idCurrency = null)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return \CPANA\ClassifiedsBundle\Entity\Currencies 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idCityArea
     *
     * @param \CPANA\ClassifiedsBundle\Entity\CityAreas $idCityArea
     * @return Ads
     */
    public function setIdCityArea(\CPANA\ClassifiedsBundle\Entity\CityAreas $idCityArea = null)
    {
        $this->idCityArea = $idCityArea;

        return $this;
    }

    /**
     * Get idCityArea
     *
     * @return \CPANA\ClassifiedsBundle\Entity\CityAreas 
     */
    public function getIdCityArea()
    {
        return $this->idCityArea;
    }
}
