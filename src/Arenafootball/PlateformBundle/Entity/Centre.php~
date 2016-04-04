<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Centre
 *
 * @ORM\Table(name="centre")
 * @ORM\Entity
 */
class Centre
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
     * @ORM\Column(name="nom", type="string", length=100)
     * @Assert\Length(min=2, minMessage="Votre nom du centre doit faire au moins {{ limit }} caractères.")
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="nbTerrain", type="float")
     * @Assert\Type(type="float", message="le nombre de terrain doit être un nombre.")
     */
    private $nbTerrain;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     * @Assert\Length(min=2, minMessage="Votre ville doit faire au moins {{ limit }} caractères.")
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\Length(min=50, minMessage="Votre decription doit faire au moins {{ limit }} caractères.")
     */
    private $description;  
    
    


    public function __toString()
        {
            return $this->nom;
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
     * Set nom
     *
     * @param string $nom
     * @return Centre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }



    /**
     * Set ville
     *
     * @param string $ville
     * @return Centre
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Centre
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Centre
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
     * Set nbTerrain
     *
     * @param float $nbTerrain
     * @return Centre
     */
    public function setNbTerrain($nbTerrain)
    {
        $this->nbTerrain = $nbTerrain;

        return $this;
    }

    /**
     * Get nbTerrain
     *
     * @return float 
     */
    public function getNbTerrain()
    {
        return $this->nbTerrain;
    }
}
