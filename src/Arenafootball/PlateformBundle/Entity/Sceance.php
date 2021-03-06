<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sceance
 *
 * @ORM\Table(name="sceance")
 * @ORM\Entity
 */
class Sceance
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
     * @var integer
     *
     * @ORM\Column(name="nbSceance", type="integer")
     * @Assert\NotBlank()
     */
    private $nbSceance;    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeGo", type="time")
     */
    private $timeGo;

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
     * Set nbSceance
     *
     * @param integer $nbSceance
     * @return Sceance
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

    /**
     * Set timeGo
     *
     * @param \DateTime $timeGo
     * @return Sceance
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
     * Set centre
     *
     * @param \Arenafootball\PlateformBundle\Entity\Centre $centre
     * @return Sceance
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
     * @return Sceance
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
