<?php

namespace Zoba\HolidaysManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Zoba\HolidaysManagerBundle\Entity\ExtraTime;
use Zoba\HolidaysManagerBundle\Form\ExtraTimeType;

/**
 * ExtraTime controller.
 *
 * @Route("/extra_time_admin")
 */
class ExtraTimeController extends Controller
{
    /**
     * Lists all ExtraTime entities.
     *
     * @Route("/", name="extra_time_admin")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ZobaHolidaysManagerBundle:ExtraTime')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a ExtraTime entity.
     *
     * @Route("/{id}/show", name="extra_time_admin_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZobaHolidaysManagerBundle:ExtraTime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraTime entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new ExtraTime entity.
     *
     * @Route("/new", name="extra_time_admin_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ExtraTime();
        $form   = $this->createForm(new ExtraTimeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new ExtraTime entity.
     *
     * @Route("/create", name="extra_time_admin_create")
     * @Method("POST")
     * @Template("ZobaHolidaysManagerBundle:ExtraTime:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new ExtraTime();
        $form = $this->createForm(new ExtraTimeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('extra_time_admin_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ExtraTime entity.
     *
     * @Route("/{id}/edit", name="extra_time_admin_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZobaHolidaysManagerBundle:ExtraTime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraTime entity.');
        }

        $editForm = $this->createForm(new ExtraTimeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing ExtraTime entity.
     *
     * @Route("/{id}/update", name="extra_time_admin_update")
     * @Method("POST")
     * @Template("ZobaHolidaysManagerBundle:ExtraTime:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZobaHolidaysManagerBundle:ExtraTime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraTime entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ExtraTimeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('extra_time_admin_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a ExtraTime entity.
     *
     * @Route("/{id}/delete", name="extra_time_admin_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ZobaHolidaysManagerBundle:ExtraTime')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ExtraTime entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('extra_time_admin'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
