<?php

namespace App\Models;

use App\Model;

class SignUp extends Model
{
    public function __construct(protected User $userModel, protected Invoice $invoiceModel)
    {
        parent::__construct();
    }

    /**
     * @throws \Throwable
     */
    public function register(array $userInfo, array $invoiceInfo): int
    {
        try {
            $this->db->beginTransaction();

            $userId = $this->userModel->create($userInfo['name'], $userInfo['email'], $userInfo['password']);
            $invoiceId = $this->invoiceModel->create($userId, $invoiceInfo['amount']);

            $this->db->commit();
        } catch (\Throwable $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }

            throw $e;
        }

        return $invoiceId;
    }
}