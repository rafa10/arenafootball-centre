<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CentreType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',         'text',    array('attr' => array('placeholder' => 'Saisier le nom du center')))
            ->add('nbTerrain',   'number',  array('attr' => array('placeholder' => 'Saisier le nombre du terrain')))
            ->add('ville',       'text',    array('data' => 'Sousse'))
            ->add('region', 'entity', array(
                  'empty_value' => 'Choisissez...', 
                  'class'    => 'ArenafootballPlateformBundle:RegionCentre',
                  'property' => 'nom',
                  'multiple' => false
                ))
            ->add('description', 'textarea',array('attr' => array('placeholder' => 'Saisier la discription du centre')))            
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Centre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_centre';
    }
}
