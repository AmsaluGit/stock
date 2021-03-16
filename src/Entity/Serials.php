<?php

namespace App\Entity;

use App\Repository\SerialsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SerialsRepository::class)
 */
class Serials
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $serial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\OneToMany(targetEntity=Transfer::class, mappedBy="serials")
     */
    private $tranfers;
    /** 
    * @ORM\Column(type="integer", nullable=true)
    */
    private $transfer_request;
    
    /**
     * @ORM\ManyToOne(targetEntity=Orders::class, inversedBy="serials")
     */
    private $orders;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $hasSerial;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="serials")
     */
    private $current_owner;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;
 
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransferRequest(): ?int
    {
        return $this->transfer_request;
    }

    public function setTransferRequest(int $transfer_request): self
    {
        $this->transfer_request = $transfer_request;

        return $this;
    }

    public function getCurrentOwner(): ?User
    {
        return $this->current_owner;
    }

    public function setCurrentOwner(?User $user): self
    {
        $this->current_owner = $user;
        
        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(string $serial): self
    {
        $this->serial = $serial;

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

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(?Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    public function getTransfer(): ?Transfer
    {
        return $this->transfer;
    }

    public function setTransfer(?Transfer $transfer): self
    {
        $this->transfer = $transfer;

        return $this;
    }

    public function getHasSerial(): ?bool
    {
        return $this->hasSerial;
    }

    public function setHasSerial(?bool $hasSerial): self
    {
        $this->hasSerial = $hasSerial;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
 
}
