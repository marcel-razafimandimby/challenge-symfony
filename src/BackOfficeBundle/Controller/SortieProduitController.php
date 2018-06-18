<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\SortieProduit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Sortieproduit controller.
 *
 */
class SortieProduitController extends Controller
{
    /**
     * Lists all sortieProduit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sortieProduits = $em->getRepository('BackOfficeBundle:SortieProduit')->findBy(array(),array("dateSortie"=>"DESC"));

        return $this->render('@BackOffice/sortieproduit/index.html.twig', array(
            'sortieProduits' => $sortieProduits,
        ));
    }

    /**
     * Creates a new sortieProduit entity.
     *
     */
    public function newAction(Request $request)
    {
        $sortieProduit = new Sortieproduit();
        $form = $this->createForm('BackOfficeBundle\Form\SortieProduitType', $sortieProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sortieProduit);
            $em->flush();
            //retrait stock
            $stock = $em->getRepository('BackOfficeBundle:Stock')->findBy(array("produit"=>$sortieProduit->getProduit()));
            if($stock){
                $qttStock = $stock[0]->getQtt();
                $nvQtt = $qttStock - $sortieProduit->getQtt();
                //mettre à jour stock
                $stock[0]->setQtt($nvQtt);
                $em->persist($stock[0]);
                $em->flush();

            }
            $this->get('session')->getFlashBag()->add('success', 'Enregistrement effectuée avec succès');
            return $this->redirectToRoute('backoffice_sortieproduit_index', array('id' => $sortieProduit->getId()));
        }

        return $this->render('@BackOffice/sortieproduit/new.html.twig', array(
            'sortieProduit' => $sortieProduit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sortieProduit entity.
     *
     */
    public function showAction(SortieProduit $sortieProduit)
    {
        $deleteForm = $this->createDeleteForm($sortieProduit);

        return $this->render('@BackOffice/ortieproduit/show.html.twig', array(
            'sortieProduit' => $sortieProduit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sortieProduit entity.
     *
     */
    public function editAction(Request $request, SortieProduit $sortieProduit)
    {
        $deleteForm = $this->createDeleteForm($sortieProduit);
        $editForm = $this->createForm('BackOfficeBundle\Form\SortieProduitType', $sortieProduit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('success', 'Modification effectuée avec succès');
            return $this->redirectToRoute('backoffice_sortieproduit_edit', array('id' => $sortieProduit->getId()));
        }

        return $this->render('@BackOffice/sortieproduit/edit.html.twig', array(
            'sortieProduit' => $sortieProduit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sortieProduit entity.
     *
     */
    public function deleteAction(Request $request, SortieProduit $sortieProduit)
    {
        $form = $this->createDeleteForm($sortieProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sortieProduit);
            $em->flush();
        }
        $this->get('session')->getFlashBag()->add('success', 'Suppression effectuée avec succès');
        return $this->redirectToRoute('backoffice_sortieproduit_index');
    }

    /**
     * Creates a form to delete a sortieProduit entity.
     *
     * @param SortieProduit $sortieProduit The sortieProduit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SortieProduit $sortieProduit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_sortieproduit_delete', array('id' => $sortieProduit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $sortieproduit = $em->getRepository('BackOfficeBundle:SortieProduit')->find($id);

        if(!$sortieproduit){
            throw $this->createNotFoundException('Enable to find sortieproduit');
        }else{
                       
            $em->remove($sortieproduit);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'La suppression est effectuée avec succes!');

            return $this->redirect($this->generateUrl('backoffice_sortieproduit_index'));
        }

        return $this->render('@BackOffice/sortieproduit/index.html.twig', array(
            'sortieProduits' => $em->getRepository('BackOfficeBundle:SortieProduit')->findAll()

        ));
    }
}
