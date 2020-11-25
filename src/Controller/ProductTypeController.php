<?php

namespace App\Controller;

use App\Entity\ProductType;
use App\Form\ProductTypeType;
use App\Repository\ProductTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/producttype")
 */
class ProductTypeController extends AbstractController
{
    /**
     * @Route("/", name="product_type_index", methods={"GET","POST"})
     */
    public function index(Request $request, ProductTypeRepository $productTypeRepository, PaginatorInterface $paginator): Response
    {
        if($request->request->get('edit')){
            $id=$request->request->get('edit');
            $productType= $productTypeRepository->findOneBy(['id'=>$id]);
            $form = $this->createForm(ProductTypeType::class, $productType);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
              //  $department->setUpdatedAt(new \DateTime());
            
                $this->getDoctrine()->getManager()->flush();
    
                return $this->redirectToRoute('product_type_index');
            }
            $queryBuilder=$productTypeRepository->findProductType($request->query->get('search'));
            $data=$paginator->paginate(
                $queryBuilder,
                $request->query->getInt('page',1),
                18
            );
            return $this->render('product_type/index.html.twig', [
                'product_types' => $data,
                'form' => $form->createView(),
                'edit'=>$id
            ]);    
        }
        $productType = new ProductType();
        $form = $this->createForm(ProductTypeType::class, $productType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productType);
            $entityManager->flush();

            return $this->redirectToRoute('product_type_index');
        }

        $queryBuilder=$productTypeRepository->findProductType($request->query->get('search'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            18
        );
        return $this->render('product_type/index.html.twig', [
            'product_types' => $data,
            'form' => $form->createView(),
            'edit'=>false
        ]);
    }

    /**
     * @Route("/new", name="product_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $productType = new ProductType();
        $form = $this->createForm(ProductTypeType::class, $productType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productType);
            $entityManager->flush();

            return $this->redirectToRoute('product_type_index');
        }

        return $this->render('product_type/new.html.twig', [
            'product_type' => $productType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_type_show", methods={"GET"})
     */
    public function show(ProductType $productType): Response
    {
        return $this->render('product_type/show.html.twig', [
            'product_type' => $productType,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ProductType $productType): Response
    {
        $form = $this->createForm(ProductTypeType::class, $productType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_type_index');
        }

        return $this->render('product_type/edit.html.twig', [
            'product_type' => $productType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ProductType $productType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$productType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($productType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_type_index');
    }
}
