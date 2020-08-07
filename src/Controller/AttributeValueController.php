<?php

namespace App\Controller;

use App\Entity\AttributeValue;
use App\Form\AttributeValueType;
use App\Repository\AttributeValueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/attribute/value")
 */
class AttributeValueController extends AbstractController
{
    /**
     * @Route("/", name="attribute_value_index", methods={"GET"})
     */
    public function index(AttributeValueRepository $attributeValueRepository): Response
    {
        return $this->render('attribute_value/index.html.twig', [
            'attribute_values' => $attributeValueRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="attribute_value_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $attributeValue = new AttributeValue();
        $form = $this->createForm(AttributeValueType::class, $attributeValue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($attributeValue);
            $entityManager->flush();

            return $this->redirectToRoute('attribute_value_index');
        }

        return $this->render('attribute_value/new.html.twig', [
            'attribute_value' => $attributeValue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="attribute_value_show", methods={"GET"})
     */
    public function show(AttributeValue $attributeValue): Response
    {
        return $this->render('attribute_value/show.html.twig', [
            'attribute_value' => $attributeValue,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="attribute_value_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AttributeValue $attributeValue): Response
    {
        $form = $this->createForm(AttributeValueType::class, $attributeValue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('attribute_value_index');
        }

        return $this->render('attribute_value/edit.html.twig', [
            'attribute_value' => $attributeValue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="attribute_value_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AttributeValue $attributeValue): Response
    {
        if ($this->isCsrfTokenValid('delete'.$attributeValue->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($attributeValue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('attribute_value_index');
    }
}
