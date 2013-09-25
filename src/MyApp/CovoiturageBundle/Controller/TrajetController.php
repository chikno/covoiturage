<?php

namespace MyApp\CovoiturageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\CovoiturageBundle\Entity\Trajet;
use MyApp\CovoiturageBundle\Form\TrajetType;
use MyApp\CovoiturageBundle\Form\TrajetRechercheType;

/**
 * Trajet controller.
 *
 */
class TrajetController extends Controller {

    /**
     * Lists all Trajet entities.
     *
     */
    public function indexAction() {


//        $listeTrajet=new RechercheTrajet();
//        
//        
//        $listeTrajet = $this->get('covoiturage.rechercheTrajet')->rechercherTrajet('','','');
//        
//        $listeTrajet = new $this->get('covoiturage.rechercheTrajet')->rechercherTrajet();
//        $form = $this->createForm(new TrajetRechercheType(), $listeTrajet);
//        $form->bind($request);
//            
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MyAppCovoiturageBundle:Trajet')->findAll();

        return $this->render('MyAppCovoiturageBundle:Trajet:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Trajet entity.
     *
     */
    public function createAction(Request $request) {

        $entity = new Trajet();
        $form = $this->createForm(new TrajetType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();


            return $this->redirect($this->generateUrl('trajet_show', array('id' => $entity->getId())));
        }

        return $this->render('MyAppCovoiturageBundle:Trajet:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Trajet entity.
     *
     */
    public function newAction() {
        $entity = new Trajet();
        $form = $this->createForm(new TrajetType(), $entity);

        return $this->render('MyAppCovoiturageBundle:Trajet:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Trajet entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCovoiturageBundle:Trajet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trajet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);


        return $this->render('MyAppCovoiturageBundle:Trajet:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    public function listeAction($max = 5) {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select('t')
                ->from('MyAppCovoiturageBundle:Trajet', 't')
                ->orderBy('t.participation', 'DESC')
                ->setMaxResults($max);
        $query = $qb->getQuery();
        $trajets = $query->getResult();
        return $this->render("MyAppCovoiturageBundle:Trajet:liste.html.twig", array(
                    'trajets' => $trajets,
        ));
    }

    /**
     * Displays a form to edit an existing Trajet entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCovoiturageBundle:Trajet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trajet entity.');
        }

        $editForm = $this->createForm(new TrajetType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppCovoiturageBundle:Trajet:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Trajet entity.
     *
     */
    public function updateAction(Request $request, $id) {


        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCovoiturageBundle:Trajet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trajet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TrajetType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trajet_edit', array('id' => $id)));
        }

        return $this->render('MyAppCovoiturageBundle:Trajet:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

//      public function rechercheAction(){
//         $entity = new Trajet();
//         $form = $this->createForm(new TrajetType(), $entity);
//         $form->bind($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//    
//
//            return $this->redirect($this->generateUrl('trajet_show', array('id' => $entity->getId())));
//        $Result=  $this->get('covoiturage.rechercheTrajet')->rechercherTrajet();
//                  
//                  
//      }}

    /**
     * Deletes a Trajet entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppCovoiturageBundle:Trajet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Trajet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trajet'));
    }

    /**
     * Creates a form to delete a Trajet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }




//
//            return $this->redirect($this->generateUrl('trajet_show', array('id' => $entity->getId())));
//        }
//
//        return $this->render('MyAppCovoiturageBundle:Trajet:new.html.twig', array(
//                    'entity' => $entity,
//                    'form' => $form->createView(),
//        ));

    /**
     * Displays a form to create a new Trajet entity.
     *
     */
    public function rechercheFormAction() {
        $trajet = new Trajet();
        $searchForm = $this->createForm(new TrajetRechercheType(), $trajet);

        return $this->render('MyAppCovoiturageBundle:Trajet:recherche.html.twig', array(
                    'trajet' => $trajet,
                    'searchForm' => $searchForm->createView(),
        ));
    }

    public function rechercheAction(Request $request) {

        $trajet = new Trajet();
        $searchForm = $this->createForm(new TrajetRechercheType(), $trajet);
        $searchForm->bindRequest($request);

        if ($searchForm->isValid()) {
 
            $em = $this->getDoctrine()->getManager();
            $qb = $em->createQueryBuilder();
            $qb->select('t')
                    ->from('MyAppCovoiturageBundle:Trajet', 't')
                    ->where('t.villeDepart LIKE :villeDepart AND t.villeArrive LIKE :villeArrive AND t.dateDepart = :dateDepart')
                    ->setParameters(array(
                        'villeDepart' => '%' . $trajet->getVilleDepart() . '%',
                        'villeArrive' => '%' . $trajet->getVilleArrive() . '%',
                        'dateDepart' =>       $trajet->getDateDepart() ))
                    ->orderBy('t.dateDepart', 'ASC');

            $query = $qb->getQuery();

            $trajets = $query->getResult();
        }
        return $this->render('MyAppCovoiturageBundle:Trajet:resultat_recherche.html.twig', array(
                    'trajets' => $trajets,
                    'searchForm' => $searchForm->createView()
        ));
    }
}
