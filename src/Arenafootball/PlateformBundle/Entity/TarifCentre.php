<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TarifCentre
 *
 * @ORM\Table(name="tarifcentre")
 * @ORM\Entity
 */
class TarifCentre
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
     * @ORM\Column(name="Type", type="string", length=20)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="DureeSceance", type="string", length=5, nullable=true)
     */
    private $dureeSceance;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbSceanceMois", type="integer")
     */
    private $nbSceanceMois;

    /**
     * @var string
     *
     * @ORM\Column(name="DureeAbonnement", type="string", length=20, nullable=true)
     */
    private $dureeAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="HoraireSceanceGo", type="time", nullable=true)
     */
    private $horaireSceanceGo;

    /**
     * @var string
     *
     * @ORM\Column(name="HoraireSceanceEnd", type="time", nullable=true)
     */
    private $horaireSceanceEnd;


    /**
     * @var string
     *
     * @ORM\Column(name="JourSceanceGo", type="string", length=10)
     */
    private $jourSceanceGo;

    /**
     * @var string
     *
     * @ORM\Column(name="JourSceanceEnd", type="string", length=10)
     */
    private $jourSceanceEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="TarifGroupe", type="float")
     */
    private $tarifGroupe;

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
     * Set type
     *
     * @param string $type
     * @return TarifCentre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dureeSceance
     *
     * @param string $dureeSceance
     * @return TarifCentre
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
     * Set nbSceanceMois
     *
     * @param integer $nbSceanceMois
     * @return TarifCentre
     */
    public function setNbSceanceMois($nbSceanceMois)
    {
        $this->nbSceanceMois = $nbSceanceMois;

        return $this;
    }

    /**
     * Get nbSceanceMois
     *
     * @return integer 
     */
    public function getNbSceanceMois()
    {
        return $this->nbSceanceMois;
    }

    /**
     * Set dureeAbonnement
     *
     * @param string $dureeAbonnement
     * @return TarifCentre
     */
    public function setDureeAbonnement($dureeAbonnement)
    {
        $this->dureeAbonnement = $dureeAbonnement;

        return $this;
    }

    /**
     * Get dureeAbonnement
     *
     * @return string 
     */
    public function getDureeAbonnement()
    {
        return $this->dureeAbonnement;
    }

    /**
     * Set horaireSceance
     *
     * @param string $horaireSceance
     * @return TarifCentre
     */
    public function setHoraireSceance($horaireSceance)
    {
        $this->horaireSceance = $horaireSceance;

        return $this;
    }

    /**
     * Get horaireSceance
     *
     * @return string 
     */
    public function getHoraireSceance()
    {
        return $this->horaireSceance;
    }

    /**
     * Set jourSceance
     *
     * @param string $jourSceance
     * @return TarifCentre
     */
    public function setJourSceance($jourSceance)
    {
        $this->jourSceance = $jourSceance;

        return $this;
    }

    /**
     * Get jourSceance
     *
     * @return string 
     */
    public function getJourSceance()
    {
        return $this->jourSceance;
    }

    /**
     * Set tarifGroupe
     *
     * @param float $tarifGroupe
     * @return TarifCentre
     */
    public function setTarifGroupe($tarifGroupe)
    {
        $this->tarifGroupe = $tarifGroupe;

        return $this;
    }

    /**
     * Get tarifGroupe
     *
     * @return float 
     */
    public function getTarifGroupe()
    {
        return $this->tarifGroupe;
    }

    /**
     * Set centre
     *
     * @param \Arenafootball\PlateformBundle\Entity\Centre $centre
     * @return TarifCentre
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
     * Set horaireSceanceGo
     *
     * @param string $horaireSceanceGo
     * @return TarifCentre
     */
    public function setHoraireSceanceGo($horaireSceanceGo)
    {
        $this->horaireSceanceGo = $horaireSceanceGo;

        return $this;
    }

    /**
     * Get horaireSceanceGo
     *
     * @return string 
     */
    public function getHoraireSceanceGo()
    {
        return $this->horaireSceanceGo;
    }

    /**
     * Set horaireSceanceEnd
     *
     * @param string $horaireSceanceEnd
     * @return TarifCentre
     */
    public function setHoraireSceanceEnd($horaireSceanceEnd)
    {
        $this->horaireSceanceEnd = $horaireSceanceEnd;

        return $this;
    }

    /**
     * Get horaireSceanceEnd
     *
     * @return string 
     */
    public function getHoraireSceanceEnd()
    {
        return $this->horaireSceanceEnd;
    }

    /**
     * Set jourSceanceGo
     *
     * @param string $jourSceanceGo
     * @return TarifCentre
     */
    public function setJourSceanceGo($jourSceanceGo)
    {
        $this->jourSceanceGo = $jourSceanceGo;

        return $this;
    }

    /**
     * Get jourSceanceGo
     *
     * @return string 
     */
    public function getJourSceanceGo()
    {
        return $this->jourSceanceGo;
    }

    /**
     * Set jourSceanceEnd
     *
     * @param string $jourSceanceEnd
     * @return TarifCentre
     */
    public function setJourSceanceEnd($jourSceanceEnd)
    {
        $this->jourSceanceEnd = $jourSceanceEnd;

        return $this;
    }

    /**
     * Get jourSceanceEnd
     *
     * @return string 
     */
    public function getJourSceanceEnd()
    {
        return $this->jourSceanceEnd;
    }

    /**
     * Set terrain
     *
     * @param \Arenafootball\PlateformBundle\Entity\Terrain $terrain
     * @return TarifCentre
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
