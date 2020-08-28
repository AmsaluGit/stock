<?php

namespace App\Entity;

use App\Repository\RequestsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RequestsRepository::class)
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
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="requests")
     */
    private $approval1;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="requests")
     */
    private $approval2;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="requests")
     */
    private $approval3;

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

    public function __construct()
    {
        $this->orders = new ArrayCollection();
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

    public function getApproval1(): ?User
    {
        return $this->approval1;
    }

    public function setApproval1(?User $approval1): self
    {
        $this->approval1 = $approval1;

        return $this;
    }

    public function getApproval2(): ?User
    {
        return $this->approval2;
    }

    public function setApproval2(?User $approval2): self
    {
        $this->approval2 = $approval2;

        return $this;
    }

    public function getApproval3(): ?User
    {
        return $this->approval3;
    }

    public function setApproval3(?User $approval3): self
    {
        $this->approval3 = $approval3;

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
}
