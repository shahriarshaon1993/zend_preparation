<?php

namespace App\Models;

use App\Model;

class Invoice extends Model
{
    public function create(int $userId, float $amount): int
    {
        $stmt = $this->db->prepare(
            'INSERT INTO invoices (user_id, amount) VALUES (?, ?)'
        );

        $stmt->execute([$userId, $amount]);

        return (int) $this->db->lastInsertId();
    }

    public function find(int $invoiceId): array
    {
        $stmt = $this->db->prepare(
            'SELECT invoices.id, amount, name
                FROM invoices
                LEFT JOIN users ON users.id = user_id
                WHERE invoices.id = ?'
            );

        $stmt->execute([$invoiceId]);

        $invoice = $stmt->fetch();

        return $invoice ? $invoice : [];
    }
}