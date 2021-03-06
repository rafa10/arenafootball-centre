<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StadierType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', 'choice', array('choices'=> array('' =>'Choisissez...', 'Monsieur'=>'Monsieur', 'Madame'=>'Madame', 'madamoiselle'=>'madamoiselle')))
            ->add('nom',      'text', array('attr' => array('placeholder' => 'Saisier le nom')))
            ->add('prenom',   'text', array('attr' => array('placeholder' => 'Saisier le prenom')))
            ->add('cin',      'text',array('attr' => array('placeholder' => 'Saisier le numéro de CIN', 'pattern'=>'[0-9]{8}')))
            ->add('phone',    'number', array('attr' => array('placeholder' => 'ex: 22 222 222', 'pattern'=>'[0-9]{8}')))
            ->add('adresse',  'text', array('attr' => array('placeholder' => 'Saisier votre adresse')))
            ->add('login',    'email', array('attr' => array('placeholder' => 'bob@monmail.com')))
            ->add('password', 'password', array('attr' => array('placeholder' => '(majuscules, minuscules et numéro)', 'pattern'=>'^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$')))
            ->add('centre',    new CentreType())
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
