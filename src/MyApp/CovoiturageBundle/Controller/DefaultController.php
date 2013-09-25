<?php

namespace MyApp\CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppCovoiturageBundle:Default:index.html.twig');
        
    }
    
    
        

//        $trajet =new Trajet();    
//        $searchForm = $this->createForm(new TrajetRechercheType(), $trajet);
//        
//        $searchForm->bind($request);
//         
//        
//        return $this->render('MyAppCovoiturageBundle:recherche.html.twig',array(
//                 'listeTrajets'=> $listeTrajets
//             ))   ;
//        
//            if ($searchForm->isValid()) {
//            $em=$this->getDoctrine()->getManager();
//            $listeTrajets=$em->getRepository('MyAppCovoiturageBundle:Trajet')->findBy(array(
//            'villeDepart' =>$villeDepart,  
//            'villeArrive' =>$villeArrive,
//            'dateDepart' =>$dateDepart)
//                );
//        
//     
//    }
//       return $this->render('MyAppCovoiturageBundle:Trajet:recherche.html.twig', array(
//                    'trajet' => $trajet,
//                    'form' => $form->createView(),
//        ));
//    
////}
//         $em = $this->getDoctrine()->getManager();
//        $entities = $em->getRepository('MyAppCovoiturageBundle:Trajet')->findAll();

      
    }

