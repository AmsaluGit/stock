<?php

namespace App\Controller;

use App\Entity\Department;
use App\Form\DepartmentType;
use App\Repository\DepartmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/department")
 */
class DepartmentController extends AbstractController
{
    /**
     * @Route("/", name="department_index", methods={"GET","POST"})
     */
    public function index(Request $request, DepartmentRepository $departmentRepository, PaginatorInterface $paginator): Response
    {
 
        if($request->request->get('edit')){
            $id=$request->request->get('edit');
            $department=$departmentRepository->findOneBy(['id'=>$id]);
            $form = $this->createForm(DepartmentType::class, $department);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
              //  $department->setUpdatedAt(new \DateTime());
            
                $this->getDoctrine()->getManager()->flush();
    
                return $this->redirectToRoute('department_index');
            }
            $queryBuilder=$departmentRepository->findDepartment($request->query->get('search'));
            $data=$paginator->paginate(
                $queryBuilder,
                $request->query->getInt('page',1),
                18
            );
            return $this->render('department/index.html.twig', [
                'departments' => $data,
                'form' => $form->createView(),
                'edit'=>$id
            ]);    
        }
        $department = new Department();
        $form = $this->createForm(DepartmentType::class, $department);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /*$department->setIsActive(true);
            $department->setCreatedAt(new \DateTime());
            $department->setRegisteredBy($this->getUser());*/
            $entityManager->persist($department);
            $entityManager->flush();

            return $this->redirectToRoute('department_index');
        }

        $queryBuilder=$departmentRepository->findDepartment($request->query->get('search'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            18
        );
        return $this->render('department/index.html.twig', [
            'departments' => $data,
            'form' => $form->createView(),
            'edit'=>false
        ]);
    }  


   

    /**
     * @Route("/{id}", name="department_show", methods={"GET"})
     */
    public function show(Department $department): Response
    {
        return $this->render('department/show.html.twig', [
            'department' => $department,
        ]);
    }



    /**
     * @Route("/{id}", name="department_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Department $department): Response
    {
        if ($this->isCsrfTokenValid('delete'.$department->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($department);
            $entityManager->flush();
        }

        return $this->redirectToRoute('department_index');
    }
}
