<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MImagesType extends AbstractType
{
    private $centre;
    public function __construct($centre){
        $this->centre = $centre;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('centre',        null, array('choices'=>array($this->centre)))
            ->add('file',         'file', array('required' => false))
            ->add('alt',          'choice', array('choices'=>array('photo'=>'Photo supplémentaire', 'logo'=>'Photo principal', )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Images'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_images';
    }
}
