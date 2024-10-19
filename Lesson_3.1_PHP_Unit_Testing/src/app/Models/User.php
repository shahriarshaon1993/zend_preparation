<?php

namespace App\Models;

use App\Model;

class User extends Model
{
    public function create(string $name, string $email, string $password, bool $isActive = true): int
    {
        $stmt = $this->db->prepare(
            'INSERT INTO users (name, email, password, active, created_at, updated_at)
                        VALUES (?, ?, ?, ?, NOW(), NOW())'
        );

        $stmt->execute([$name, $email, $password, $isActive]);

        return (int) $this->db->lastInsertId();
    }
}