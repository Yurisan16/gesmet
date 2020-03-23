<?php

namespace AppBundle\Controller;

use AppBundle\Entity\LendMT;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Lendmt controller.
 *
 * @Route("lendmt")
 */
class LendMTController extends Controller
{
    /**
     * Lists all lendMT entities.
     *
     * @Route("/", name="lendmt_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lendMTs = $em->getRepository('AppBundle:LendMT')->findAll();

        return $this->render('lendmt/index.html.twig', array(
            'lendMTs' => $lendMTs,
        ));
    }

    /**
     * Creates a new lendMT entity.
     *
     * @Route("/new", name="lendmt_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $lendMT = new Lendmt();
        $form = $this->createForm('AppBundle\Form\LendMTType', $lendMT);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lendMT);
            $em->flush();

            return $this->redirectToRoute('lendmt_show', array('id' => $lendMT->getId()));
        }

        return $this->render('lendmt/new.html.twig', array(
            'lendMT' => $lendMT,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lendMT entity.
     *
     * @Route("/{id}", name="lendmt_show")
     * @Method("GET")
     */
    public function showAction(LendMT $lendMT)
    {
        $deleteForm = $this->createDeleteForm($lendMT);

        return $this->render('lendmt/show.html.twig', array(
            'lendMT' => $lendMT,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lendMT entity.
     *
     * @Route("/{id}/edit", name="lendmt_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, LendMT $lendMT)
    {
        $deleteForm = $this->createDeleteForm($lendMT);
        $editForm = $this->createForm('AppBundle\Form\LendMTType', $lendMT);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lendmt_edit', array('id' => $lendMT->getId()));
        }

        return $this->render('lendmt/edit.html.twig', array(
            'lendMT' => $lendMT,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lendMT entity.
     *
     * @Route("/{id}", name="lendmt_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, LendMT $lendMT)
    {
        $form = $this->createDeleteForm($lendMT);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lendMT);
            $em->flush();
        }

        return $this->redirectToRoute('lendmt_index');
    }

    /**
     * Creates a form to delete a lendMT entity.
     *
     * @param LendMT $lendMT The lendMT entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(LendMT $lendMT)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lendmt_delete', array('id' => $lendMT->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
