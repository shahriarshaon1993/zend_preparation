<?php

namespace App\Models;

use App\Model;

class Ticket extends Model
{
    public function all(): \Generator
    {
        $stmt = $this->db->query(
            'SELECT id, title, description
            FROM tickets'
        );

//        return $stmt->fetchAll();

        // After using generator
        return $this->fetchLazy($stmt);
    }
}