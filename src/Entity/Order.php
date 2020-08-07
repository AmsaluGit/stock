<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $approval1;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $approval2;

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

    public function getApproval1(): ?bool
    {
        return $this->approval1;
    }

    public function setApproval1(?bool $approval1): self
    {
        $this->approval1 = $approval1;

        return $this;
    }

    public function getApproval2(): ?bool
    {
        return $this->approval2;
    }

    public function setApproval2(?bool $approval2): self
    {
        $this->approval2 = $approval2;

        return $this;
    }
}
