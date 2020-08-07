<?php

namespace App\Controller;

use App\Entity\College;
use App\Form\CollegeType;
use App\Repository\CollegeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/college")
 */
class CollegeController extends AbstractController
{
    /**
     * @Route("/", name="college_index", methods={"GET","POST"})
     */


    public function index(Request $request, CollegeRepository $collegeRepository, PaginatorInterface $paginator): Response
    {

        if($request->request->get('edit')){
            $id=$request->request->get('edit');
            $college=$collegeRepository->findOneBy(['id'=>$id]);
            $form = $this->createForm(CollegeType::class, $college);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
              //  $college->setUpdatedAt(new \DateTime());
            
                $this->getDoctrine()->getManager()->flush();
    
                return $this->redirectToRoute('college_index');
            }
            $queryBuilder=$collegeRepository->findCollege($request->query->get('search'));
            $data=$paginator->paginate(
                $queryBuilder,
                $request->query->getInt('page',1),
                18
            );
            return $this->render('college/index.html.twig', [
                'colleges' => $data,
                'form' => $form->createView(),
                'edit'=>$id
            ]);    
        }
        $college = new College();
        $form = $this->createForm(CollegeType::class, $college);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /*$college->setIsActive(true);
            $college->setCreatedAt(new \DateTime());
            $college->setRegisteredBy($this->getUser());*/
            $entityManager->persist($college);
            $entityManager->flush();

            return $this->redirectToRoute('college_index');
        }

        $queryBuilder=$collegeRepository->findCollege($request->query->get('search'));
        $data=$paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            18
        );
        return $this->render('college/index.html.twig', [
            'colleges' => $data,
            'form' => $form->createView(),
            'edit'=>false
        ]);
    }  



    /**
     * @Route("/{id}", name="college_show", methods={"GET"})
     */
    public function show(College $college): Response
    {
        
        return $this->render('college/show.html.twig', [
            'college' => $college,
        ]);
    }

     

    /**
     * @Route("/{id}", name="college_delete", methods={"DELETE"})
     */
    public function delete(Request $request, College $college): Response
    {
        if ($this->isCsrfTokenValid('delete'.$college->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($college);
            $entityManager->flush();
        }

        return $this->redirectToRoute('college_index');
    }
}
