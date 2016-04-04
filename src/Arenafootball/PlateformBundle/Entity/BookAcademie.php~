<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BookAcademie
 *
 * @ORM\Table(name="bookacademie")
 * @ORM\Entity
 */
class BookAcademie
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
     * @ORM\Column(name="DateGo", type="date")
     */
    private $dateGo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbSceance", type="integer")
     */
    private $nbSceance;

    /**
     * @var string
     *
     * @ORM\Column(name="Day", type="string", length=20)
     */
    private $day;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100)
     */
    private $status=0;

    /**
     * @ORM\ManyToOne(targetEntity="Arenafootball\PlateformBundle\Entity\Centre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $centre;   

    /**
     * @ORM\ManyToOne(targetEntity="Arenafootball\PlateformBundle\Entity\Terrain")
     * @ORM\JoinColumn(nullable=false)
     */
    private $terrain;

    

    public function __construct()
      {
        $this->dateGo = new \Datetime();
        $this->dateEnd = new \Datetime();
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
     * Set dateGo
     *
     * @param \DateTime $dateGo
     * @return BookAcademie
     */
    public function setDateGo($dateGo)
    {
        $this->dateGo = $dateGo;

        return $this;
    }

    /**
     * Get dateGo
     *
     * @return \DateTime 
     */
    public function getDateGo()
    {
        return $this->dateGo;
    }    

    /**
     * Set day
     *
     * @param string $day
     * @return BookAcademie
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return BookAcademie
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return BookAcademie
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
     * Set status
     *
     * @param string $status
     * @return BookAcademie
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set centre
     *
     * @param \Arenafootball\PlateformBundle\Entity\Centre $centre
     * @return BookAcademie
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
     * Set terrain
     *
     * @param \Arenafootball\PlateformBundle\Entity\Terrain $terrain
     * @return BookAcademie
     */
    public function setTerrain(\Arenafootball\PlateformBundle\Entity\Terrain $terrain)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return \Arenafootball\PlateformBundle\Entity\Terrain 
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * Set client
     *
     * @param \Arenafootball\PlateformBundle\Entity\Client $client
     * @return BookAcademie
     */
    public function setClient(\Arenafootball\PlateformBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Arenafootball\PlateformBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set nbSceance
     *
     * @param integer $nbSceance
     * @return BookAcademie
     */
    public function setNbSceance($nbSceance)
    {
        $this->nbSceance = $nbSceance;

        return $this;
    }

    /**
     * Get nbSceance
     *
     * @return integer 
     */
    public function getNbSceance()
    {
        return $this->nbSceance;
    }
}
