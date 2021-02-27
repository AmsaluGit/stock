<?php

namespace App\Entity;

use App\Repository\RequestsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RequestsRepository::class)
 * 
 */
class Requests
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="requests")
     */
    private $requester;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $requestedDate;

 

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="request")
     */
    private $orders;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $closed;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reason;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $receivedDate;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $delivered;

    /**
     * @ORM\OneToMany(targetEntity=ApprovalLog::class, mappedBy="request")
     */
    private $approvalLogs;

   

    public function __construct()
    {
        $this->orders = new ArrayCollection();
        $this->approvalLogs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequester(): ?User
    {
        return $this->requester;
    }

    public function setRequester(?User $requester): self
    {
        $this->requester = $requester;

        return $this;
    }

    public function getRequestedDate(): ?\DateTimeInterface
    {
        return $this->requestedDate;
    }

    public function setRequestedDate(?\DateTimeInterface $requestedDate): self
    {
        $this->requestedDate = $requestedDate;

        return $this;
    }

    

    /**
     * @return Collection|Orders[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Orders $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setRequest($this);
        }

        return $this;
    }

    public function removeOrder(Orders $order): self
    {
        if ($this->orders->contains($order)) {
            $this->orders->removeElement($order);
            // set the owning side to null (unless already changed)
            if ($order->getRequest() === $this) {
                $order->setRequest(null);
            }
        }

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getClosed(): ?int
    {
        return $this->closed;
    }

    public function setClosed(?int $closed): self
    {
        $this->closed = $closed;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getReceivedDate(): ?\DateTimeInterface
    {
        return $this->receivedDate;
    }

    public function setReceivedDate(?\DateTimeInterface $receivedDate): self
    {
        $this->receivedDate = $receivedDate;

        return $this;
    }

    public function getDelivered(): ?int
    {
        return $this->delivered;
    }

    public function setDelivered(?int $delivered): self
    {
        $this->delivered = $delivered;

        return $this;
    }

    /**
     * @return Collection|ApprovalLog[]
     */
    public function getApprovalLogs(): Collection
    {
        return $this->approvalLogs;
    }

    public function addApprovalLog(ApprovalLog $approvalLog): self
    {
        if (!$this->approvalLogs->contains($approvalLog)) {
            $this->approvalLogs[] = $approvalLog;
            $approvalLog->setRequest($this);
        }

        return $this;
    }

    public function removeApprovalLog(ApprovalLog $approvalLog): self
    {
        if ($this->approvalLogs->removeElement($approvalLog)) {
            // set the owning side to null (unless already changed)
            if ($approvalLog->getRequest() === $this) {
                $approvalLog->setRequest(null);
            }
        }

        return $this;
    }

    
}
