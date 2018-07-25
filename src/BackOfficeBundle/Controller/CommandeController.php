<?php

//src/BackOfficeBundle/Controller
namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Commande;
use BackOfficeBundle\Entity\LigneCommande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Form\CommandeType;

/**
 * Commande controller.
 *
 */
class CommandeController extends Controller
{
    /**
     * Lists all commande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository(Commande::class)->findBy(array(),array("dateCommande"=>"DESC"));
        //get prix total par commande
        $tabTotal = $this->get('backoffice.commande')->getTotalCommande();

        return $this->render('@BackOffice/commande/index.html.twig', array(
            'commandes' => $commandes,
            'tabTotal'=>$tabTotal
        ));
    }

    /**
     * Creates a new commande entity.
     *
     */
    public function newAction(Request $request)
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('backoffice_commande_show', array('id' => $commande->getId()));
        }

        return $this->render('@BackOffice/commande/new.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commande entity.
     *
     */
    public function showAction(Commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);

        return $this->render('@BackOffice/commande/show.html.twig', array(
            'commande' => $commande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commande entity.
     *
     */
    public function editAction(Request $request, Commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);
        $editForm = $this->createForm(CommandeType::class, $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('backoffice_commande_edit', array('id' => $commande->getId()));
        }

        return $this->render('@BackOffice/commande/edit.html.twig', array(
            'commande' => $commande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commande entity.
     *
     */
    public function deleteAction(Request $request, Commande $commande)
    {
        $form = $this->createDeleteForm($commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commande);
            $em->flush();
        }

        return $this->redirectToRoute('backoffice_commande_index');
    }

    /**
    * DeleteAction function
    */
    public function deleteElementAction(Commande $commande)
    {
        if(!$commande){
           //return throw new \Exception("La commande n existe plus");
        }else{
            $em = $this->getDoctrine()->getManager();
            $em->remove($commande);
            $em->flush();

            $this->get('common.flashBag')->add('success_delete');
        }

        return $this->redirectToRoute('backoffice_commande_index');
    }

    /**
     * Creates a form to delete a commande entity.
     *
     * @param Commande $commande The commande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commande $commande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_commande_delete', array('id' => $commande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function detailAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository(Commande::class)->find($id);
        $ligneCommande = $em->getRepository(LigneCommande::class)->findBy(array("commande"=>$commande));
        
        return $this->render('@BackOffice/commande/details-commande.html.twig', array(
            'commande' => $commande,
            'ligneCommande'=>$ligneCommande
        ));
    }
}
