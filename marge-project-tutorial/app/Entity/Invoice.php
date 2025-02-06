<?php

namespace App\Entity;

use App\Enums\InvoiceStatus;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('invoices')]
class Invoice
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;

    #[Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private float $amount;

    #[Column(name: 'invoice_number')]
    private string $invoiceNumber;

    #[Column]
    private InvoiceStatus $status;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    #[Column(name: 'updated_at')]
    private \DateTime $updatedAt;

    #[Column(name: 'due_date')]
    private \DateTime $dueDate;

    #[OneToMany(targetEntity: InvoiceItem::class, mappedBy: 'invoice', cascade: ['persist', 'remove'])]
    private Collection $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function getStatus(): InvoiceStatus
    {
        return $this->status;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function setId(int $id): Invoice
    {
        $this->id = $id;
        return $this;
    }

    public function setAmount(float $amount): Invoice
    {
        $this->amount = $amount;
        return $this;
    }

    public function setInvoiceNumber(string $invoiceNumber): Invoice
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    public function setStatus(InvoiceStatus $status): Invoice
    {
        $this->status = $status;
        return $this;
    }

    public function setCreatedAt(\DateTime $createdAt): Invoice
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(\DateTime $updatedAt): Invoice
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return Collection<InvoiceItem>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function setItems(Collection $items): Invoice
    {
        $this->items = $items;
        return $this;
    }

    public function addItem(InvoiceItem $item): Invoice
    {
        $item->setInvoice($this);
        $this->items->add($item);

        return $this;
    }
}