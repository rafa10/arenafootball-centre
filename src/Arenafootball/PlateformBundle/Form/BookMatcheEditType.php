<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \DateTime;

class BookMatcheEditType extends AbstractType
{
    private $centre;
    private $terrain;
    private $client;

    public function __construct($centre, $terrain, $client)
      {
         $this->centre = $centre;
         $this->terrain = $terrain;
         $this->client = $client;
         
      }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',     'date', array('widget' => 'single_text','format' => 'dd-MM-yyyy'))
            ->add('time',     'time')
            ->add('prix',     'number', array('attr' => array('placeholder' => 'Tarif de groupe')))
            ->add('status',   'number', array('attr' => array('placeholder' => '1 si paye, 0 sinon')))
            ->add('centre',    null, array('choices'=>array($this->centre)))
            ->add('terrain',   null, array('choices'=>array($this->terrain)))
            ->add('client',    null, array()) 

            
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
