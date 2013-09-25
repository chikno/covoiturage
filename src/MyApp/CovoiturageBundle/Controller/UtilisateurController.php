<?php

namespace MyApp\CovoiturageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\CovoiturageBundle\Entity\Utilisateur;
use MyApp\CovoiturageBundle\Form\UtilisateurType;

/**
 * Utilisateur controller.
 *
 */
class UtilisateurController extends Controller
{
    /**
     * Lists all Utilisateur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppCovoiturageBundle:Utilisateur')->findAll();

        return $this->render('MyAppCovoiturageBundle:Utilisateur:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Utilisateur entity.
     *
     */
    
    public function createAction(Request $request)
    {
        $entity  = new Utilisateur();
        $form = $this->createForm(new UtilisateurType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateur_show', array('id' => $entity->getId())));
        }

        return $this->render('MyAppCovoiturageBundle:Utilisateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function listeAction($max = 5){
            $em=$this->getDoctrine()->getManager();
            $qb= $em->createQueryBuilder();
            $qb ->select('u') 
                ->from('MyAppCovoiturageBundle:Utilisateur','u')
                ->orderBy('u.nom','DESC')
                ->setMaxResults($max);
            $query=$qb->getQuery();
            $utilisateurs=$query->getResult();
            return $this->render("MyAppCovoiturageBundle:Utilisateur:liste.html.twig", array(
                'utilisateurs' => $utilisateurs,
            ));
        }

    /**
     * Displays a form to create a new Utilisateur entity.
     *
     */
    public function newAction()
    {
        $entity = new Utilisateur();
        $form   = $this->createForm(new UtilisateurType(), $entity);

        return $this->render('MyAppCovoiturageBundle:Utilisateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Utilisateur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCovoiturageBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppCovoiturageBundle:Utilisateur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Utilisateur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCovoiturageBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $editForm = $this->createForm(new UtilisateurType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppCovoiturageBundle:Utilisateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Utilisateur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppCovoiturageBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UtilisateurType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateur_edit', array('id' => $id)));
        }

        return $this->render('MyAppCovoiturageBundle:Utilisateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Utilisateur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppCovoiturageBundle:Utilisateur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Utilisateur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateur'));
    }

    /**
     * Creates a form to delete a Utilisateur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
