<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MStadierType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', 'choice', array('choices'=> array('Monsieur'=>'Monsieur', 'Madame'=>'Madame', 'madamoiselle'=>'madamoiselle')))
            ->add('nom',      'text')
            ->add('prenom',   'text')
            ->add('cin',      'text')
            ->add('phone',    'number')
            ->add('adresse',  'text')
            ->add('login',    'email')
            ->add('centre',    new MCentreType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Stadier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_stadier';
    }
}
