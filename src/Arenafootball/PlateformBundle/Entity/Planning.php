<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Planning
 *
 * @ORM\Table(name="planning")
 * @ORM\Entity
 */
class Planning
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnd", type="date")
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeGo", type="time")
     */
    private $timeGo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeEnd", type="time")
     */
    private $timeEnd;    

    /**
     * @var string
     *
     * @ORM\Column(name="DureeSceance", type="string", length=5)
     */
    private $dureeSceance;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="Capacite", type="integer")
     */
    private $capacite;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;    

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
     * @return Planning
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
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Planning
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set timeGo
     *
     * @param \DateTime $timeGo
     * @return Planning
     */
    public function setTimeGo($timeGo)
    {
        $this->timeGo = $timeGo;

        return $this;
    }

    /**
     * Get timeGo
     *
     * @return \DateTime 
     */
    public function getTimeGo()
    {
        return $this->timeGo;
    }

    /**
     * Set timeEnd
     *
     * @param \DateTime $timeEnd
     * @return Planning
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }

    /**
     * Get timeEnd
     *
     * @return \DateTime 
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    
    /**
     * Set dureeSceance
     *
     * @param string $dureeSceance
     * @return Planning
     */
    public function setDureeSceance($dureeSceance)
    {
        $this->dureeSceance = $dureeSceance;

        return $this;
    }

    /**
     * Get dureeSceance
     *
     * @return string 
     */
    public function getDureeSceance()
    {
        return $this->dureeSceance;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Planning
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
     * Set capacite
     *
     * @param integer $capacite
     * @return Planning
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set centre
     *
     * @param \Arenafootball\PlateformBundle\Entity\Centre $centre
     * @return Planning
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
     * Set prix
     *
     * @param float $prix
     * @return Planning
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
     * Set terrain
     *
     * @param \Arenafootball\PlateformBundle\Entity\Terrain $terrain
     * @return Planning
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
}
