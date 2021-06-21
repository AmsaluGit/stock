<?php

namespace App\Controller;

use App\Entity\Company;
use App\Form\CompanyType;
use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/company")
 */
class CompanyController extends AbstractController
{
    /**
     * @Route("/", name="company_index", methods={"GET","POST"})
     */
    public function index(Request $request, CompanyRepository $companyRepository, PaginatorInterface $paginator): Response
    {

        if($request->request->get('edit')){
            $id=$request->request->get('edit');
            $company=$companyRepository->findOneBy(['id'=>$id]);
            $form = $this->createForm(CompanyType::class, $company);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
              //  $company->setUpdatedAt(new \DateTime());
            
                $this->getDoctrine()->getManager()->flush();
    
                return $this->redirectToRoute('company_index');
            }
            $queryBuilder=$companyRepository->findCompany($request->query->get('search'));
            $data=$paginator->paginate(
                $queryBuilder,
                $request->query->getInt('page',1),
                18
            );
            return $this->render('company/index.html.twig', [
                'companies' => $data,
                'form' => $form->createView(),
                'edit'=>$id
            ]);    
        }
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /*$company->setIsActive(true);
            $company->setCreatedAt(new \DateTime());
            $company->setRegisteredBy($this->getUser());*/
            $entityManager->persist($company);
            $entityManager->flush();

            return $this->redirectToRoute('company_index');
        }

        $queryBuilder=$companyRepository->findCompany($request->query->get('search'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            18
        );
        return $this->render('company/index.html.twig', [
            'companies' => $data,
            'form' => $form->createView(),
            'edit'=>false
        ]);
    }  



    /**
     * @Route("/{id}", name="company_show", methods={"GET"})
     */
    public function show(Company $company): Response
    {
        
        return $this->render('company/show.html.twig', [
            'company' => $company,
        ]);
    }

     

    /**
     * @Route("/{id}", name="company_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Company $company): Response
    {
        if ($this->isCsrfTokenValid('delete'.$company->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($company);
            $entityManager->flush();
        }

        return $this->redirectToRoute('company_index');
    }
}
