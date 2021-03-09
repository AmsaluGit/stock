<?php

namespace App\Entity;

use App\Repository\TransfersApprovalLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransfersApprovalLogRepository::class)
 */
class TransfersApprovalLog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TransferedItemsGroup::class, inversedBy="TransferedItemsGroup")
     */
    private $transfer;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="transfersApprovalLogs")
     */
    private $approver;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="date")
     */
    private $approval_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $approval_level;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransfer(): ?TransferedItemsGroup
    {
        return $this->transfer;
    }

    public function setTransfer(TransferedItemsGroup $transfer): self
    {
        $this->transfer = $transfer;

        return $this;
    }

    public function getApprover(): ?User
    {
        return $this->approver;
    }

    public function setApprover(User $approver): self
    {
        $this->approver = $approver;

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

    public function getApprovalDate(): ?\DateTimeInterface
    {
        return $this->approval_date;
    }

    public function setApprovalDate(\DateTimeInterface $approval_date): self
    {
        $this->approval_date = $approval_date;

        return $this;
    }

    public function getApprovalLevel(): ?int
    {
        return $this->approval_level;
    }

    public function setApprovalLevel(int $approval_level): self
    {
        $this->approval_level = $approval_level;

        return $this;
    }
}
