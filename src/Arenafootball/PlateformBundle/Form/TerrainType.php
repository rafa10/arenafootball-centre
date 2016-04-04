<?php

namespace Arenafootball\PlateformBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Arenafootball\PlateformBundle\Entity\Centre;

class TerrainType extends AbstractType
{
    private $centre;
    public function __construct($centre){
        $this->centre = $centre;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',      'text', array('attr' => array('placeholder' => 'Saisier un nom du terrain')))
            ->add('capacite', 'number', array('attr' => array('placeholder' => 'Nombre des personnes dans terrain ')))
            ->add('centre',    null, array('choices'=>array($this->centre)))
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Terrain'
        ));       
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_terrain';
    }
}
