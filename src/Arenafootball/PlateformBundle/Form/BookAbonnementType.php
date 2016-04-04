<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookAbonnementType extends AbstractType
{

  private $centre;
  private $terrain;

  public function __construct($centre, $terrain)
  {
     $this->centre = $centre;
     $this->terrain = $terrain;
  }

    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateGo',        'date', array('widget' => 'single_text', 'input' => 'datetime', 'format' => 'dd-MM-yyyy',))
            ->add('nbSceance',     'number', array('attr' => array('placeholder' => 'Numéro de séance')))
            ->add('day',           'choice', array('choices'=> array(
                  ''=>' Choisissez...',
                  'Lundi' => 'Lundi',
                  'Mardi' => 'Mardi',
                  'Mercredi' => 'Mercredi',
                  'Jeudi' => 'Jeudi',
                  'Vendredi' => 'Vendredi',
                  'Samedi' => 'Samedi',
                  'Dimenche' => 'Dimanche'
                  )))
            ->add('time',          'time', array('attr' => array('placeholder' => 'heure de la abonnement')))
            ->add('prix',          'number', array('attr' => array('placeholder' => 'Tarif de groupe')))

            ->add('client',         null, array())            
            ->add('centre',         null, array('choices'=>array($this->centre))) 
            ->add('terrain',        null, array('choices'=>array($this->terrain)))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\BookAbonnement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_bookabonnement';
    }
}
