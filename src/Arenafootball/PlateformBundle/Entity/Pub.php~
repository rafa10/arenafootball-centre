<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pub
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pub
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
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DureeGo", type="date")
     */
    private $dureeGo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DureeEnd", type="date")
     */
    private $dureeEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="stauts", type="string", length=100)
     */
    private $stauts;


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
     * @return Pub
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
     * Set description
     *
     * @param string $description
     * @return Pub
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
     * Set dureeGo
     *
     * @param \DateTime $dureeGo
     * @return Pub
     */
    public function setDureeGo($dureeGo)
    {
        $this->dureeGo = $dureeGo;

        return $this;
    }

    /**
     * Get dureeGo
     *
     * @return \DateTime 
     */
    public function getDureeGo()
    {
        return $this->dureeGo;
    }

    /**
     * Set dureeEnd
     *
     * @param \DateTime $dureeEnd
     * @return Pub
     */
    public function setDureeEnd($dureeEnd)
    {
        $this->dureeEnd = $dureeEnd;

        return $this;
    }

    /**
     * Get dureeEnd
     *
     * @return \DateTime 
     */
    public function getDureeEnd()
    {
        return $this->dureeEnd;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Pub
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
     * Set stauts
     *
     * @param string $stauts
     * @return Pub
     */
    public function setStauts($stauts)
    {
        $this->stauts = $stauts;

        return $this;
    }

    /**
     * Get stauts
     *
     * @return string 
     */
    public function getStauts()
    {
        return $this->stauts;
    }
}
