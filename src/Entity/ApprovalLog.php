<?php

namespace App\Entity;

use App\Repository\ApprovalLogRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity=ItemApprovalStatus::class, mappedBy="approvalLog")
     */
    private $itemApprovalStatuses;

    public function __construct()
    {
        $this->itemApprovalStatuses = new ArrayCollection();
    }

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
            $itemApprovalStatus->setApprovalLog($this);
        }

        return $this;
    }

    public function removeItemApprovalStatus(ItemApprovalStatus $itemApprovalStatus): self
    {
        if ($this->itemApprovalStatuses->removeElement($itemApprovalStatus)) {
            // set the owning side to null (unless already changed)
            if ($itemApprovalStatus->getApprovalLog() === $this) {
                $itemApprovalStatus->setApprovalLog(null);
            }
        }

        return $this;
    }
}
