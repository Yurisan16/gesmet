<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MoveProd;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Moveprod controller.
 *
 * @Route("moveprod")
 */
class MoveProdController extends Controller
{
    /**
     * Lists all moveProd entities.
     *
     * @Route("/", name="moveprod_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $moveProds = $em->getRepository('AppBundle:MoveProd')->findAll();

        return $this->render('moveprod/index.html.twig', array(
            'moveProds' => $moveProds,
        ));
    }

    /**
     * Creates a new moveProd entity.
     *
     * @Route("/new", name="moveprod_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $moveProd = new Moveprod();
        $form = $this->createForm('AppBundle\Form\MoveProdType', $moveProd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /*$mp = $request->request->get('destination');
            if ($moveProd->getTypemove() == "Entrada") {
                # code...
                $moveProd->setDestination($mp);
            }*/

            $em = $this->getDoctrine()->getManager();
            $em->persist($moveProd);
            $em->flush();

            return $this->redirectToRoute('moveprod_index');
        }

        return $this->render('moveprod/new.html.twig', array(
            'moveProd' => $moveProd,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a moveProd entity.
     *
     * @Route("/{id}", name="moveprod_show")
     * @Method("GET")
     */
    public function showAction(MoveProd $moveProd)
    {
        $deleteForm = $this->createDeleteForm($moveProd);

        return $this->render('moveprod/show.html.twig', array(
            'moveProd' => $moveProd,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing moveProd entity.
     *
     * @Route("/{id}/edit", name="moveprod_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MoveProd $moveProd)
    {
        $deleteForm = $this->createDeleteForm($moveProd);
        $editForm = $this->createForm('AppBundle\Form\MoveProdType', $moveProd);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('moveprod_index');
        }

        return $this->render('moveprod/edit.html.twig', array(
            'moveProd' => $moveProd,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a moveProd entity.
     *
     * @Route("/{id}", name="moveprod_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MoveProd $moveProd)
    {
        $form = $this->createDeleteForm($moveProd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($moveProd);
            $em->flush();
        }

        return $this->redirectToRoute('moveprod_index');
    }

    /**
     * Creates a form to delete a moveProd entity.
     *
     * @param MoveProd $moveProd The moveProd entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MoveProd $moveProd)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('moveprod_delete', array('id' => $moveProd->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}