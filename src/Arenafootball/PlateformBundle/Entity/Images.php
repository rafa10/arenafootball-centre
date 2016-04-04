<?php

namespace Arenafootball\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Images
{
 
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @var \DateTime
     * 
     * @ORM\COlumn(name="updated_at",type="datetime", nullable=true) 
     */
    private $updateAt;

    /**
     * @ORM\PostLoad()
     */
    public function postLoad()
    {
        $this->updateAt = new \DateTime();
    }
     
    /**
     * @ORM\Column(type="string", length=255)     
     */
    private $url;
 
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alt;    
 
 
    /**
     * @ORM\ManyToOne(targetEntity="Arenafootball\PlateformBundle\Entity\Centre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $centre; 

    
    /**
     * @Assert\File(maxSize="5M")
     */
    public $file;

      

    public function getUploadRootDir()
    {
        return __dir__.'/../../../../www/uploads';
    }
    
    public function getAbsolutePath()
    {
        return null === $this->url ? null : $this->getUploadRootDir().'/'.$this->url;
    }
    
    public function getAssetPath()
    {
        return 'uploads/'.$this->url;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate() 
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getUrl();
        $this->updateAt = new \DateTime();
        
        if (null !== $this->file) 
            $this->url = sha1(uniqid(mt_rand(),true)).'.'.$this->file->guessExtension();
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate() 
     */
    public function upload()
    {
        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(),$this->url);
            unset($this->file);
            
            if ($this->oldFile != null) unlink($this->tempFile);
        }
    }
    
    /**
     * @ORM\PreRemove() 
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
    }
    
    /**
     * @ORM\PostRemove() 
     */
    public function removeUpload()
    {
        if (file_exists($this->tempFile)) unlink($this->tempFile);
    }
 
    

    /*public function getWebPath()
      {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
      }*/

    
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
     * Set centre
     *
     * @param \Arenafootball\PlateformBundle\Entity\Centre $centre
     * @return Images
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
     * Set url
     *
     * @param string $url
     * @return Images
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
     * Set alt
     *
     * @param string $alt
     * @return Images
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }


}
