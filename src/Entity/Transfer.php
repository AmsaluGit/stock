<?php

namespace App\Entity;

use App\Repository\TransferRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransferRepository::class)
 */
class Transfer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="transfers")
     */
    private $approvedBy;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=TransferedItemsGroup::class, inversedBy="transfers")
     */
    private $group;
    
    /**
     * @ORM\ManyToOne(targetEntity=Serials::class, inversedBy="Transfer")
     */
    private $serial;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTo(): ?User
    {
        return $this->to;
    }

    public function setTo(?User $to): self
    {
        $this->to = $to;

        return $this;
    }

    public function getGroup(): ?TransferedItemsGroup
    {
        return $this->group;
    }

    public function setGroup(?TransferedItemsGroup $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getFrom(): ?User
    {
        return $this->from;
    }

    public function setFrom(?User $from): self
    {
        $this->from = $from;

        return $this;
    }

    public function getApprover(): ?User
    {
        return $this->approver;
    }

    public function setApprover(?User $approver): self
    {
        $this->approver = $approver;

        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(?Serials $serial): self
    {
        $this->serial = $serial;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
