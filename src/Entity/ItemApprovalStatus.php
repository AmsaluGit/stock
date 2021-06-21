<?php

namespace App\Entity;

use App\Repository\ItemApprovalStatusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemApprovalStatusRepository::class)
 */
class ItemApprovalStatus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ApprovalLog::class, inversedBy="itemApprovalStatuses")
     */
    private $approvalLog;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $allowedQuantity;

    /**
     * @ORM\ManyToOne(targetEntity=Orders::class, inversedBy="itemApprovalStatuses")
     */
    private $orders;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApprovalLog(): ?ApprovalLog
    {
        return $this->approvalLog;
    }

    public function setApprovalLog(?ApprovalLog $approvalLog): self
    {
        $this->approvalLog = $approvalLog;

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

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(?Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }
}
