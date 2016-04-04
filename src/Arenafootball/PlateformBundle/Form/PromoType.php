<?php

namespace Arenafootball\PlateformBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PromoType extends AbstractType
{
   private $centre;    
    public function __construct($centre)
    {
        $this->centre= $centre;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('promoDate',    'date', array('widget' => 'single_text','format' => 'dd-MM-yyyy',))
            ->add('promoTime',    'time')
            ->add('description',  'textarea', array('attr'=>array('placeholder'=>'Description pour la promotion')))
            ->add('prix',         'number', array('attr'=>array('placeholder'=>'TND')))            
            ->add('centre',       null, array('choices'=>array($this->centre)))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Promo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_promo';
    }
}
