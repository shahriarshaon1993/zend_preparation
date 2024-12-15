<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use App\Model;

class Invoice extends Model
{
    public function all(InvoiceStatus $status): array
    {
//        if (! in_array($status, InvoiceStatus::all())) {
//            throw new \RuntimeException('Invalid status [' . $status . ']');
//        }

        $stmt = $this->db->prepare(
            'SELECT id, invoice_number, amount, status
            FROM invoices
            WHERE status = ?'
        );

        $stmt->execute([$status->value]);

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}