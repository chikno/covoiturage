<?php

namespace MyApp\CovoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('villeDepart')
            ->add('villeArrive')
            ->add('dateDepart')
            ->add('dateArrive')
            ->add('autoroute')
            ->add('bagage')
            ->add('participation')
            ->add('utilisateurs')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\CovoiturageBundle\Entity\Trajet'
        ));
    }

    public function getName()
    {
        return 'myapp_covoituragebundle_trajettype';
    }
}
