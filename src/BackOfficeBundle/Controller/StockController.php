<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Stock;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Form\StockType;

/**
 * Stock controller.
 *
 */
class StockController extends Controller
{
    /**
     * Lists all stock entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stocks = $em->getRepository('BackOfficeBundle:Stock')->findAll();
        //initialisation du stock 
        $initStocks = $this->get('backoffice.stock')->initStock($stocks);
        

        return $this->render('@BackOffice/stock/index.html.twig', array(
            'stocks' => $initStocks,
        ));
    }

    /**
     * Creates a new stock entity.
     *
     */
    public function newAction(Request $request)
    {
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stock);
            $em->flush();

            $this->get('common.flashBag')->add('success');

            return $this->redirectToRoute('backoffice_stock_show', array('id' => $stock->getId()));
        }

        return $this->render('@BackOffice/stock/new.html.twig', array(
            'stock' => $stock,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a stock entity.
     *
     */
    public function showAction(Stock $stock)
    {
        $deleteForm = $this->createDeleteForm($stock);

        return $this->render('@BackOffice/stock/show.html.twig', array(
            'stock' => $stock,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing stock entity.
     *
     */
    public function editAction(Request $request, Stock $stock)
    {
        $deleteForm = $this->createDeleteForm($stock);
        $editForm = $this->createForm(StockType::class, $stock);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->get('common.flashBag')->add('success');

            return $this->redirectToRoute('backoffice_stock_edit', array('id' => $stock->getId()));
        }

        return $this->render('@BackOffice/stock/edit.html.twig', array(
            'stock' => $stock,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a stock entity.
     *
     */
    public function deleteAction(Request $request, Stock $stock)
    {
        $form = $this->createDeleteForm($stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stock);
            $em->flush();
        }

        $this->get('common.flashBag')->add('success_delete');

        return $this->redirectToRoute('backoffice_stock_index');
    }

    /**
     * Creates a form to delete a stock entity.
     *
     * @param Stock $stock The stock entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Stock $stock)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_stock_delete', array('id' => $stock->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository(Stock::class)->find($id);

        if(!$stock){
            throw $this->createNotFoundException('Enable to find stock');
        }else{
                       
            $em->remove($stock);
            $em->flush();
            
            $this->get('common.flashBag')->add('success_delete');

            return $this->redirect($this->generateUrl('backoffice_stock_index'));
        }

        return $this->render('@BackOffice/stock/index.html.twig', array(
            'stocks' => $em->getRepository('BackOfficeBundle:Stock')->findAll()

        ));
    }
}
