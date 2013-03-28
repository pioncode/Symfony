<?php

namespace Pion\DbBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pion\DbBundle\Entity\Papers;
use Pion\DbBundle\Form\PapersType;

/**
 * Papers controller.
 *
 * @Route("/papers")
 */
class PapersController extends Controller
{
    /**
     * Lists all Papers entities.
     *
     * @Route("/", name="papers")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PionDbBundle:Papers')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Papers entity.
     *
     * @Route("/{id}/show", name="papers_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PionDbBundle:Papers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Papers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Papers entity.
     *
     * @Route("/new", name="papers_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Papers();
        $form   = $this->createForm(new PapersType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Papers entity.
     *
     * @Route("/create", name="papers_create")
     * @Method("POST")
     * @Template("PionDbBundle:Papers:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Papers();
        $form = $this->createForm(new PapersType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('papers_show', array('id' => $entity->getPaperId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Papers entity.
     *
     * @Route("/{id}/edit", name="papers_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PionDbBundle:Papers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Papers entity.');
        }

        $editForm = $this->createForm(new PapersType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Papers entity.
     *
     * @Route("/{id}/update", name="papers_update")
     * @Method("POST")
     * @Template("PionDbBundle:Papers:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PionDbBundle:Papers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Papers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PapersType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('papers_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Papers entity.
     *
     * @Route("/{id}/delete", name="papers_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PionDbBundle:Papers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Papers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('papers'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
