<?php

namespace App\Entity;

use App\Repository\StockUniqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StockUniqueRepository::class)
 */
class StockUnique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Product::class, inversedBy="stockUnique", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totalPrice;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $given;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $available;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $requested;

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): self
    {
        $this->product = $product;

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

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getGiven(): ?int
    {
        return $this->given;
    }

    public function setGiven(?int $given): self
    {
        $this->given = $given;

        return $this;
    }

    public function getAvailable(): ?int
    {
        return $this->available;
    }

    public function setAvailable(?int $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getRequested(): ?int
    {
        return $this->requested;
    }

    public function setRequested(?int $requested): self
    {
        $this->requested = $requested;

        return $this;
    }

 
}
