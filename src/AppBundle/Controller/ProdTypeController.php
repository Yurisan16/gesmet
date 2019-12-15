<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ProdType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Prodtype controller.
 *
 * @Route("prodtype")
 */
class ProdTypeController extends Controller
{
    /**
     * Lists all prodType entities.
     *
     * @Route("/", name="prodtype_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prodTypes = $em->getRepository('AppBundle:ProdType')->findAll();

        return $this->render('prodtype/index.html.twig', array(
            'prodTypes' => $prodTypes,
        ));
    }

    /**
     * Creates a new prodType entity.
     *
     * @Route("/new", name="prodtype_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $prodType = new Prodtype();
        $form = $this->createForm('AppBundle\Form\ProdTypeType', $prodType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($prodType);
            $em->flush();

            return $this->redirectToRoute('prodtype_show', array('id' => $prodType->getId()));
        }

        return $this->render('prodtype/new.html.twig', array(
            'prodType' => $prodType,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a prodType entity.
     *
     * @Route("/{id}", name="prodtype_show")
     * @Method("GET")
     */
    public function showAction(ProdType $prodType)
    {
        $deleteForm = $this->createDeleteForm($prodType);

        return $this->render('prodtype/show.html.twig', array(
            'prodType' => $prodType,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing prodType entity.
     *
     * @Route("/{id}/edit", name="prodtype_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ProdType $prodType)
    {
        $deleteForm = $this->createDeleteForm($prodType);
        $editForm = $this->createForm('AppBundle\Form\ProdTypeType', $prodType);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prodtype_edit', array('id' => $prodType->getId()));
        }

        return $this->render('prodtype/edit.html.twig', array(
            'prodType' => $prodType,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a prodType entity.
     *
     * @Route("/{id}", name="prodtype_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ProdType $prodType)
    {
        $form = $this->createDeleteForm($prodType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($prodType);
            $em->flush();
        }

        return $this->redirectToRoute('prodtype_index');
    }

    /**
     * Creates a form to delete a prodType entity.
     *
     * @param ProdType $prodType The prodType entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProdType $prodType)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prodtype_delete', array('id' => $prodType->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
