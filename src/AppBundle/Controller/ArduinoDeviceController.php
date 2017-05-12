<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ArduinoDevice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Arduinodevice controller.
 *
 * @Route("arduinodevice")
 */
class ArduinoDeviceController extends Controller
{
    /**
     * Lists all arduinoDevice entities.
     *
     * @Route("/", name="arduinodevice_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $arduinoDevices = $em->getRepository('AppBundle:ArduinoDevice')->findAll();

        return $this->render('arduinodevice/index.html.twig', array(
            'arduinoDevices' => $arduinoDevices,
        ));
    }

    /**
     * Creates a new arduinoDevice entity.
     *
     * @Route("/new", name="arduinodevice_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $arduinoDevice = new Arduinodevice();
        $form = $this->createForm('AppBundle\Form\ArduinoDeviceType', $arduinoDevice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($arduinoDevice);
            $em->flush();

            return $this->redirectToRoute('arduinodevice_show', array('id' => $arduinoDevice->getId()));
        }

        return $this->render('arduinodevice/new.html.twig', array(
            'arduinoDevice' => $arduinoDevice,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a arduinoDevice entity.
     *
     * @Route("/{id}", name="arduinodevice_show")
     * @Method("GET")
     */
    public function showAction(ArduinoDevice $arduinoDevice)
    {
        $deleteForm = $this->createDeleteForm($arduinoDevice);

        return $this->render('arduinodevice/show.html.twig', array(
            'arduinoDevice' => $arduinoDevice,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing arduinoDevice entity.
     *
     * @Route("/{id}/edit", name="arduinodevice_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ArduinoDevice $arduinoDevice)
    {
        $deleteForm = $this->createDeleteForm($arduinoDevice);
        $editForm = $this->createForm('AppBundle\Form\ArduinoDeviceType', $arduinoDevice);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('arduinodevice_edit', array('id' => $arduinoDevice->getId()));
        }

        return $this->render('arduinodevice/edit.html.twig', array(
            'arduinoDevice' => $arduinoDevice,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a arduinoDevice entity.
     *
     * @Route("/{id}", name="arduinodevice_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ArduinoDevice $arduinoDevice)
    {
        $form = $this->createDeleteForm($arduinoDevice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($arduinoDevice);
            $em->flush();
        }

        return $this->redirectToRoute('arduinodevice_index');
    }

    /**
     * Creates a form to delete a arduinoDevice entity.
     *
     * @param ArduinoDevice $arduinoDevice The arduinoDevice entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArduinoDevice $arduinoDevice)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('arduinodevice_delete', array('id' => $arduinoDevice->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
