<?php

namespace Arenafootball\PlateformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
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
            ->add('titre',    'text', array('attr' => array('placeholder' => 'Titre de match vidéo')))
            ->add('DateGo',   'date', array('widget' => 'single_text', 'input' => 'datetime', 'format' => 'dd-MM-yyyy',))
            ->add('time',     'time')
            ->add('url',      'url', array('attr' => array('placeholder' => 'Copier le lien de vidéo en youtube')))

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
            'data_class' => 'Arenafootball\PlateformBundle\Entity\Video'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'arenafootball_plateformbundle_video';
    }
}
