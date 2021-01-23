<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="integer")
     */
    private $quantity;

      /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $serial;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"default":"0"})
     */
    private $delivered;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"default":"0"})
     */
    private $status;

 
 

    /**
     * @ORM\ManyToOne(targetEntity=Requests::class, inversedBy="orders")
     */
    private $request;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unitprice;

    /**
     * @ORM\OneToMany(targetEntity=ItemApprovalStatus::class, mappedBy="orders")
     */
    private $itemApprovalStatuses;

    /**
     * @ORM\ManyToOne(targetEntity=Stock::class, inversedBy="orders")
     */
    private $stock;

    public function __construct()
    {
        $this->itemApprovalStatuses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDelivered(): ?int
    {
        return $this->delivered;
    }

    public function setDelivered(?int $delivered): self
    {
        $this->delivered = $delivered;

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


    public function getUnitprice(): ?int
    {
        return $this->unitprice;
    }

    public function setUnitprice(?int $unitprice): self
    {
        $this->unitprice = $unitprice;

        return $this;
    }

 

    public function getRequest(): ?Requests
    {
        return $this->request;
    }

    public function setRequest(?Requests $request): self
    {
        $this->request = $request;

        return $this;
    }

   
    /**
     * @return Collection|ItemApprovalStatus[]
     */
    public function getItemApprovalStatuses(): Collection
    {
        return $this->itemApprovalStatuses;
    }

    public function addItemApprovalStatus(ItemApprovalStatus $itemApprovalStatus): self
    {
        if (!$this->itemApprovalStatuses->contains($itemApprovalStatus)) {
            $this->itemApprovalStatuses[] = $itemApprovalStatus;
            $itemApprovalStatus->setOrders($this);
        }

        return $this;
    }

    public function removeItemApprovalStatus(ItemApprovalStatus $itemApprovalStatus): self
    {
        if ($this->itemApprovalStatuses->removeElement($itemApprovalStatus)) {
            // set the owning side to null (unless already changed)
            if ($itemApprovalStatus->getOrders() === $this) {
                $itemApprovalStatus->setOrders(null);
            }
        }

        return $this;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): self
    {
        $this->stock = $stock;

        return $this;
    }


}
