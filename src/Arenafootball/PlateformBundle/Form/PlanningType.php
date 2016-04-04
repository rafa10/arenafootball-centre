<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PlanningType extends AbstractType
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
            ->add('dateGo',       'date', array('widget' => 'single_text', 'input' => 'datetime', 'format' => 'dd-MM-yyyy', 'attr' => array('class' => 'date'),))
            ->add('dateEnd',      'date', array('widget' => 'single_text', 'input' => 'datetime', 'format' => 'dd-MM-yyyy', 'attr' => array('class' => 'date'),))
            ->add('timeGo',       'time')
            ->add('timeEnd',      'time')
            ->add('dureeSceance', 'choice', array('choices'=> array(''=>' Choisissez...','1:15'=>'1:15', '12:20'=>'1:20', '1:30'=>'1:30')))
            ->add('description',  'textarea', array('attr' => array('placeholder' => 'Description du planning')))
            ->add('capacite',     'number', array('attr' => array('placeholder' => 'Nombre des pérsonne peut réserver', 'pattern'=>'[0-9]{1}')))
            ->add('prix',         'number', array('attr' => array('placeholder' => 'TND')))            
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
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Planning'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_planning';
    }
}
