<?php

namespace App\Entity;

use App\Repository\ApprovalLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApprovalLogRepository::class)
 */
class ApprovalLog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Requests::class, inversedBy="approvalLogs")
     */
    private $request;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="approvalLogs")
     */
    private $approver;

    /**
     * @ORM\Column(type="datetime")
     */
    private $approvalDate;

    /**
     * @ORM\Column(type="smallint")
     */
    private $approvalLevel;

 
    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":"0"})
     */
    private $allowedQuantity;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRequest(): ?Requests
    {
        return $this->request;
    }

    public function setRequest(?Requests $request): self
    {
        $this->request = $request;

        return $this;
    }

    public function getApprover(): ?user
    {
        return $this->approver;
    }

    public function setApprover(?user $approver): self
    {
        $this->approver = $approver;

        return $this;
    }

    public function getApprovalDate(): ?\DateTimeInterface
    {
        return $this->approvalDate;
    }

    public function setApprovalDate(\DateTimeInterface $approvalDate): self
    {
        $this->approvalDate = $approvalDate;

        return $this;
    }

    public function getApprovalLevel(): ?int
    {
        return $this->approvalLevel;
    }

    public function setApprovalLevel(int $approvalLevel): self
    {
        $this->approvalLevel = $approvalLevel;

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
}
