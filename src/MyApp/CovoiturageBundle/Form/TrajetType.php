<?php

namespace MyApp\CovoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('villeDepart','entity',array(
			'label' => 'Ville de Départ',	
			'class'=>'MyAppCovoiturageBundle:Ville', 
			'query_builder'=> function(EntityRepository $er) { 
			    return $er->createQueryBuilder('v')
					->orderBy('v.ville', 'ASC');
                   },	
			'multiple' => false,
			'expanded' => false,
                       'property' => 'ville'
                                ))
                
               ->add('villeArrive','entity',array(
			'label' => 'Ville d\'arrivée',	
			'class'=>'MyAppCovoiturageBundle:Ville', 
			'query_builder'=> function(EntityRepository $er) { 
			    return $er->createQueryBuilder('v')
					->orderBy('v.ville', 'ASC');
                      },	
			'multiple' => false,
			'expanded' => false,
                        'property' => 'ville'
                                ))                 
           // ->add('villeDepart')
           // ->add('villeArrive')
            ->add('dateDepart')
            ->add('dateArrive')
            ->add('autoroute')
            ->add('bagage')
            ->add('participation','text')
           // ->add('utilisateurs')
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
