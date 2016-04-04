<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pub
 *
 * @ORM\Table(name="video")
 * @ORM\Entity
 */
class Video
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
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateGo", type="date")
     */
    private $DateGo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Time", type="time")
     */
    private $time; 

    /**
     * @var string
     *
     * @ORM\Column(name="Url", type="text")
     */
    private $url;     

    
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
     * @ORM\ManyToOne(targetEntity="Arenafootball\PlateformBundle\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    public function __construct()
      {
        $this->DateGo = new \Datetime();
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
     * Set titre
     *
     * @param string $titre
     * @return Video
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set DateGo
     *
     * @param \DateTime $dateGo
     * @return Video
     */
    public function setDateGo($dateGo)
    {
        $this->DateGo = $dateGo;

        return $this;
    }

    /**
     * Get DateGo
     *
     * @return \DateTime 
     */
    public function getDateGo()
    {
        return $this->DateGo;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Video
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
     * Set url
     *
     * @param string $url
     * @return Video
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set centre
     *
     * @param \Arenafootball\PlateformBundle\Entity\Centre $centre
     * @return Video
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
     * @return Video
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
     * @return Video
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
}
