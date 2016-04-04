<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TarifCentreType extends AbstractType
{

    private $centre;
    private $terrain;

    public function __construct($centre, $terrain){
        $this->centre=$centre;
        $this->terrain=$terrain;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type'           ,'choice', array('choices'=> array(''=>' Choisissez...','Abonnement'=>'Abonnement', 'Matches'=>'Matches', 'Academie'=>'Académie')))
            ->add('dureeSceance'   ,'choice', array('choices'=> array(''=>' Choisissez...','1:15'=>'1:15', '12:20'=>'1:20', '1:30'=>'1:30')))
            ->add('nbSceanceMois'  ,'number', array('attr'=>array('placeholder'=>'Exp: 1 matche ou 4 min pour abonnement ')))
            ->add('dureeAbonnement','choice', array('choices'=> array(''=>' Choisissez...','-'=>'Match','1-mois'=>'1 mois', '3-mois'=>'3 mois', '6-mois'=>'6 mois', '12-mois'=>'12 mois')))
            ->add('horaireSceanceGo' ,'time')
            ->add('horaireSceanceEnd' ,'time')
            ->add('jourSceanceGo'    ,'choice', array('choices'=> array(
                  ''=>' Choisissez...',
                  'Lundi' => 'Lundi',
                  'Mardi' => 'Mardi',
                  'Mercredi' => 'Mercredi',
                  'Jeudi' => 'Jeudi',
                  'Vendredi' => 'Vendredi',
                  'Samedi' => 'Samedi',
                  'Dimenche' => 'Dimanche'
                  )))
            ->add('jourSceanceEnd'    ,'choice', array('choices'=> array(
                  ''=>' Choisissez...',
                  'Lundi' => 'Lundi',
                  'Mardi' => 'Mardi',
                  'Mercredi' => 'Mercredi',
                  'Jeudi' => 'Jeudi',
                  'Vendredi' => 'Vendredi',
                  'Samedi' => 'Samedi',
                  'Dimenche' => 'Dimanche'
                  )))
            ->add('tarifGroupe'    ,'number', array('attr'=>array('placeholder'=>'TND')))
            ->add('centre',         null, array('choices'=>array($this->centre)))
            ->add('terrain',         null, array('choices'=>array($this->terrain)))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\TarifCentre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_tarifcentre';
    }
}
