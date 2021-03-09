<?php

namespace App\Controller;

use App\Entity\Transfer;
use App\Form\TransferType;
use App\Entity\UserGroup;
use App\Entity\User;
use App\Repository\TransferRepository;
use App\Entity\TransferedItemsGroup;
use App\Entity\TransfersApprovalLog;
use App\Repository\TransferedItemsGroupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/transfer")
 */
class TransferController extends AbstractController
{
    /**
     * @Route("/", name="transfer_index", methods={"GET"})
     */
    public function index(TransferedItemsGroupRepository $transferRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $rowsPerPage = 15;
        $em = $this->getDoctrine()->getManager();

        $approval_level = $this->getApprovalLevel();

        if($approval_level == 0)
        {
            return $this->redirect("/profile");
        }

        $queryBuilder=$transferRepository->filterGroup($request->query->get("search"),$approval_level);
        $data = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            $rowsPerPage
        );
        return $this->render('transfer/index.html.twig', [
            'transfer' => $data,
            'approval_level' => $approval_level
        ]);
    }

    /** 
     * @Route("/accept", name="acceptRequest", methods={"POST"})
     * 
     */
    public function acceptRequest(Request $request)
    {
        $id = $request->request->get("test");
        if($id == null)
        {
            return $this->redirect("/profile");
        }

        $tr = new TransferedItemsGroup();
        $em = $this->getDoctrine()->getManager();

        $group = $em->getRepository(TransferedItemsGroup::class)->find($id);
        $group->setStatus(1);
        $em->persist($group);
        $em->flush();
        return $this->redirect("/transfer/$id");
    }

    /** 
     * @Route("/reject/{id}", name="rejectRequest")
     * 
     */
    public function rejectRequest(Request $request)
    {
        $id = $request->get("id");
        if($id == null)
        {
            return $this->redirect("/profile");
        }

        $tr = new TransferedItemsGroup();
        $em = $this->getDoctrine()->getManager();

        $group = $em->getRepository(TransferedItemsGroup::class)->find($id);
        $group->setStatus(7);
        $em->persist($group);
        $em->flush();
        return $this->redirect("/transfer/$id");
    }

    /**
     * @Route("/new", name="transfer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $transfer = new Transfer();
        $form = $this->createForm(TransferType::class, $transfer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transfer);
            $entityManager->flush();

            return $this->redirectToRoute('transfer_index');
        }

        return $this->render('transfer/new.html.twig', [
            'transfer' => $transfer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="transfer_show", methods={"GET"})
     */
    public function show(TransferRepository $transferRepository, Request $request, TransferedItemsGroupRepository $trItems): Response
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get("id");

        $trItemsGroup = $trItems->get($id);
        $approval_level = $this->getApprovalLevel();

        $transfer_items = $transferRepository->getItemsList( $id,$approval_level);           
        
        return $this->render('transfer/show.html.twig', [
            'group' => $trItemsGroup,
            'approval_level' => $approval_level,
            'transfer' => $transfer_items,
        ]);
    }

    
    /**
     * @Route("/print/{id}")
     */
    public function print(Request $request, TransferRepository $tr, TransferedItemsGroupRepository $trItems)
    {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $approval_level = $this->getApprovalLevel();
        
        if($approval_level != 3){
            return $this->redirect("/transfer");
        }

        $items = $tr->getItemsPrint($id);
        $trItemsGroup = $trItems->get($id);

        return $this->render("/transfer/print.html.twig",[
            "group" => $trItemsGroup,
            'items' => $items
        ]);
    }

    /**
     * @Route("/approve/{id}")
     */
    public function approve(Request $request)
    {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $approval_level = $this->getApprovalLevel();

        $itemGroup = $em->getRepository(TransferedItemsGroup::class)->find($id);
        
        if($itemGroup == null || $itemGroup->getStatus() != $approval_level)
        {
            return $this->redirect("/transfer");
        }

        $itemGroup->setStatus($approval_level+1);
        $transferLog = new TransfersApprovalLog();
        $transferLog->setTransfer($itemGroup);
        $transferLog->setApprover($this->getUser());
        $transferLog->setApprovalLevel($approval_level);
        $transferLog->setStatus($approval_level+1);
        $transferLog->setApprovalDate(new \DateTime());

        $em->persist($itemGroup);
        $em->persist($transferLog);
        $em->flush();

        $id = $itemGroup->getId();
        if($approval_level == 3)
            return $this->redirect("/transfer/$id");
        else
            return $this->redirect("/transfer");
    }


    /**
     * @Route("/reject/{id}")
     */
    public function reject(Request $request)
    {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $approval_level = $this->getApprovalLevel();

        $itemGroup = $em->getRepository(TransferedItemsGroup::class)->find($id);
        
        if($itemGroup == null || $itemGroup->getStatus() != $approval_level)
        {
            return $this->redirect("/transfer");
        }

        $itemGroup->setStatus(7);
        $transferLog = new TransfersApprovalLog();
        $transferLog->setTransfer($itemGroup);
        $transferLog->setApprover($this->getUser());
        $transferLog->setApprovalLevel($approval_level);
        $transferLog->setStatus(7);
        $transferLog->setApprovalDate(new \DateTime());

        $em->persist($itemGroup);
        $em->persist($transferLog);
        $em->flush();

        $id = $itemGroup->getId();
        if($approval_level == 3)
            return $this->redirect("/transfer/$id");
        else
            return $this->redirect("/transfer");
    }

    /**
     * @Route("/{id}/edit", name="transfer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Transfer $transfer): Response
    {
        $form = $this->createForm(TransferType::class, $transfer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('transfer_index');
        }

        return $this->render('transfer/edit.html.twig', [
            'transfer' => $transfer,
            'form' => $form->createView(),
        ]);
    }

    public function getApprovalLevel()
    {
        $em = $this->getDoctrine()->getManager();
        $userGroup = $this->getUser()->getUserGroup();
        $permission = array();
        foreach($userGroup as $key => $value)
        {
            $group = $em->getRepository(UserGroup::class)->find($value->getId());
            $list = $group->getPermission();
            foreach($list as $key1 => $value1)
                if($value1->getCode() == "approver1" || $value1->getCode() == "approver2" || $value1->getCode() == "approver3" )
                    $permission[] = $value1->getCode();
        }

        $approval_level = 0;
        if(sizeof($permission) != 0)
        {    
            if($permission[0] === "approver1")
                 $approval_level = 1;
            else if($permission[0] === "approver2")
                $approval_level = 2;
            else if($permission[0] === "approver3")
                $approval_level = 3;
        }

        return $approval_level;
    }
    
}
