<?php

namespace App\Services;

use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use Doctrine\ORM\EntityManager;

class InvoiceService
{
    public function __construct(
        private EntityManager $em
    ){}

    public function getPaidInvoice(): array
    {
        return $this->em->createQueryBuilder()
            ->select('i')
            ->from(Invoice::class, 'i')
            ->where('i.status = :status')
            ->setParameter('status', InvoiceStatus::Paid)
            ->getQuery()
            ->getArrayResult();
    }
}