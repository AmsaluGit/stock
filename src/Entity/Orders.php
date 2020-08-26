<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 * @ORM\Table(name="`orders`")
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="orders")
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="date")
     */
    private $requestedDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $recievedDate;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orders")
     */
    private $receiver;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $serial;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $approval1;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $approval2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remark;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"default":"0"})
     */
    private $delivered;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"default":"0"})
     */
    private $status;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":"0"})
     */
    private $allowedQuantity;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"default":"0"})
     */
    private $closed;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $approval3;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getRequestedDate(): ?\DateTimeInterface
    {
        return $this->requestedDate;
    }

    public function setRequestedDate(\DateTimeInterface $requestedDate): self
    {
        $this->requestedDate = $requestedDate;

        return $this;
    }

    public function getRecievedDate(): ?\DateTimeInterface
    {
        return $this->recievedDate;
    }

    public function setRecievedDate(?\DateTimeInterface $recievedDate): self
    {
        $this->recievedDate = $recievedDate;

        return $this;
    }

    public function getReceiver(): ?User
    {
        return $this->receiver;
    }

    public function setReceiver(?User $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

   

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(?string $serial): self
    {
        $this->serial = $serial;

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

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;

        return $this;
    }

    public function getDelivered(): ?int
    {
        return $this->delivered;
    }

    public function setDelivered(int $delivered): self
    {
        $this->delivered = $delivered;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAllowedQuantity(): ?int
    {
        return $this->allowedQuantity;
    }

    public function setAllowedQuantity(?int $allowedQuantity): self
    {
        $this->allowedQuantity = $allowedQuantity;

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

    public function getApproval3(): ?User
    {
        return $this->approval3;
    }

    public function setApproval3(?User $approval3): self
    {
        $this->approval3 = $approval3;

        return $this;
    }


}
