<?php

namespace MyApp\CovoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MyApp\CovoiturageBundle\Entity\Utilisateur;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nickname')
            ->add('civilite')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('mobile')
            ->add('telephone')
            ->add('dateNaissance')
            ->add('hasCar')
            ->add('commentaire')
            ->add('photo')
            ->add('isInternational')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\CovoiturageBundle\Entity\Utilisateur'
        ));
    }

    public function getName()
    {
        return 'myapp_covoituragebundle_utilisateurtype';
    }
}
