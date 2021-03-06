<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Promo
 *
 * @ORM\Table(name="promo")
 * @ORM\Entity
 */
class Promo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promoDate", type="date")
     * @Assert\NotBlank()
     */
    private $promoDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promoTime", type="time")
     * @Assert\NotBlank()
     */
    private $promoTime;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     * @Assert\NotBlank()
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="Arenafootball\PlateformBundle\Entity\Centre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $centre;

    
    public function __construct()
      {
        $this->promoDate = new \Datetime();
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
   

    /**
     * Set description
     *
     * @param string $description
     * @return Promo
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
     * Set prix
     *
     * @param float $prix
     * @return Promo
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set centre
     *
     * @param \Arenafootball\PlateformBundle\Entity\Centre $centre
     * @return Promo
     */
    public function setCentre(\Arenafootball\PlateformBundle\Entity\Centre $centre)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Get centre
     *
     * @return \Arenafootball\PlateformBundle\Entity\Centre 
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set promoDate
     *
     * @param \DateTime $promoDate
     * @return Promo
     */
    public function setPromoDate($promoDate)
    {
        $this->promoDate = $promoDate;

        return $this;
    }

    /**
     * Get promoDate
     *
     * @return \DateTime 
     */
    public function getPromoDate()
    {
        return $this->promoDate;
    }

    /**
     * Set promoTime
     *
     * @param \DateTime $promoTime
     * @return Promo
     */
    public function setPromoTime($promoTime)
    {
        $this->promoTime = $promoTime;

        return $this;
    }

    /**
     * Get promoTime
     *
     * @return \DateTime 
     */
    public function getPromoTime()
    {
        return $this->promoTime;
    }
}
