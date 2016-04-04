<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \DateTime;

class BookMatcheType extends AbstractType
{
    private $centres;
    private $terrains;
    private $client;
    private $timeR;
    private $dateR;
    private $prix;

      public function __construct($centres, $terrains, $client, $timeR, $dateR, $prix)
      {
         $this->centres = $centres;
         $this->terrains = $terrains;
         $this->client = $client;
         $this->dates = new DateTime($dateR);
         $this->times = new DateTime($timeR);
         $this->price = $prix;
      }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',     'date',   array('widget' => 'single_text','format' => 'dd-MM-yyyy', 'data'=> $this->dates))
            ->add('time',     'time',   array('data'=> $this->times))
            ->add('prix',     'number', array('data'=> $this->price))
            ->add('status',   'number', array('data'=> 1))
            ->add('centre',    null, array('choices'=>array($this->centres)))
            ->add('terrain',   null, array('choices'=>array($this->terrains)))
            ->add('client',    null, array('choices'=>array($this->client))) 

            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\BookMatche'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_bookmatche';
    }
}
