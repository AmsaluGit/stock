<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Order;
use App\Entity\Transfer;
use App\Entity\Serials;
use App\Repository\SerialsRepository;
use App\Repository\TransferRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(SerialsRepository $serialRepository)
    {
        $serials = $serialRepository->getSerial($this->getUser()->getId());
        return $this->render('profile/index.html.twig', [
            'item' => $serials
        ]);
    }

    /**
     * @Route("/transItem", name="transItem")
     */
    public function transfer(Request $request, SerialsRepository $serialRepository)
    {
        $transfer_data = $request->request->get("checked_list");
        $data = explode(",",$transfer_data[0]);
        $count = sizeof($data);
        
        $params = "";
        for($i = 0; $i < $count; $i++){
            $check = $i + 1;
            if($check == $count)
                $params .= " s.id = ".$data[$i];
            else
                $params .= " s.id = ".$data[$i]." or";
        }

        $conn = $this->getDoctrine()->getConnection();
        $query = "SELECT s.id, p.name, s.serial, s.model as model_number, o.model, rq.requested_date FROM serials s ".
                "JOIN orders o on o.id = s.orders_id ".
                "JOIN requests rq on rq.id = o.request_id ".
                "JOIN stock st on st.id = o.stock_id ".
                "JOIN product p on st.product_id = p.id ".
                "JOIN user u on u.id = rq.requester_id ".
                "where ".$params;
        $items = $conn->query($query)->fetchAll();
        $person = array();
        
        $request->getSession()->set("items",$data); //save selected items list in session
        $request->getSession()->set("personTo",null);

        return $this->render('profile/transfer.html.twig', [
            'item' => $items,
            'person' => $person
        ]);
    }

    /**
     * @Route("/find", name="find")
     */
    public function find(Request $request)
    {
        $items = $this->getItems($request);
        if($items == null)
        {
            return $this->redirect("/profile");
        }
        
        $email = $request->request->get("email");
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository(User::class)->findBy(['email'=>$email]);

        return $this->render('profile/transfer.html.twig', [
            'item' => $items,
            'person' => $person
        ]);
    }

    /**
     * @Route("/toapp/{id}")
     */
    public function toApprove(User $user, Request $request)
    {
        $items = $this->getItems($request);
        if($items == null)
        {
            return $this->redirect("/profile");
        }

        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository(User::class)->find($user->getId());
        $request->getSession()->set("personTo",$user->getId());

        return $this->render('profile/approve.html.twig', [
            'item' => $items,
            'person' => $person
        ]);
    }

    /**
     * @Route("appTr")
     */
    //aprove transfer
    public function approve(Request $request)
    {
        $transfer_items = $request->getSession()->get("items",null);
        $person = $request->getSession()->get("personTo",null);
        
        if($transfer_items == null && $person == null)
        {
            return $this->redirect("/profile");
        }
        
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($person);
        
        foreach($transfer_items as $key => $value)
        {
            $em = $this->getDoctrine()->getManager();
            $transfer = new Transfer();

            $transfer->setFrom($this->getUser());
            $transfer->setTo($user);
            $serial = $em->getRepository(Serials::class)->find($value);
            $transfer->setSerial($serial);
            $transfer->setStatus(0);
            $serial->setTransferRequest(1);
            $em->persist($transfer);
            $em->persist($serial);
            $em->flush();
        }

        $request->getSession()->set("items",null);
        $request->getSession()->set("personTo",null);

       return $this->redirect("/profile");
    }

    public function getItems($request)
    {
        $transfer_items = $request->getSession()->get("items",null);
        if($transfer_items == null)
        {
            return null;
        }

        $count = sizeof($transfer_items);

        $params = "";
        for($i = 0; $i < $count; $i++){
            $check = $i + 1;
            if($check == $count)
                $params .= " s.id = ".$transfer_items[$i];
            else
                $params .= " s.id = ".$transfer_items[$i]." or";
        }

        $conn = $this->getDoctrine()->getConnection();
        $query = "SELECT s.id, p.name, s.serial, s.model as model_number, o.model, rq.requested_date FROM serials s ".
                "JOIN orders o on o.id = s.orders_id ".
                "JOIN requests rq on rq.id = o.request_id ".
                "JOIN stock st on st.id = o.stock_id ".
                "JOIN product p on st.product_id = p.id ".
                "JOIN user u on u.id = rq.requester_id ".
                "where ".$params;
        $items = $conn->query($query)->fetchAll();
        return $items;
        
    }

    /**
     * @Route("/mtransReq", name="mtransReq")
     */
    public function transfer_requests(TransferRepository $transferRepository)
    {
        $requests = $transferRepository->getTransferRequests($this->getUser()->getId());
        return $this->render('profile/transferRequests.html.twig', [
            'item' => $requests,
        ]);
    }
}
