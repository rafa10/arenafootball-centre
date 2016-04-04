<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SceanceType extends AbstractType
{
    private $centre;
    private $terrain;

    public function __construct($centre, $terrain)
    {
      $this->centre=$centre;
      $this->terrain=$terrain;  
    }  

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbSceance',  'number', array('attr' => array('placeholder' => 'Exp: numero de la scéance par ordre')))
            ->add('timeGo', 'time')            
            ->add('centre',       null, array('choices'=>array($this->centre)))
            ->add('terrain',      null, array('choices'=>array($this->terrain)))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Sceance'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_sceance';
    }
}
