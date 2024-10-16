<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        try {
            $db = new PDO(
                'mysql:host='. $_ENV['DB_HOST'] .';dbname='. $_ENV['DB_DATABASE'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

        $name = 'Dom';
        $email = 'ssa@gmail.com';
        $password = 'hello@1';
        $amount = 25;

        try {
            $db->beginTransaction();

            $newUserStmt = $db->prepare(
                'INSERT INTO users (name, email, password, active, created_at, updated_at)
                        VALUES (?, ?, ?, 1, NOW(), NOW())'
            );

            $newInvoiceStmt = $db->prepare(
                'INSERT INTO invoices (user_id, amount) VALUES (?, ?)'
            );

            $newUserStmt->execute([$name, $email, $password]);

            $userId = (int) $db->lastInsertId();

            $newInvoiceStmt->execute([$userId, $amount]);

            $db->commit();
        }catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
        }

        $fetchStmt = $db->prepare(
           'SELECT invoices.id AS invoice_id, amount, user_id, name 
                FROM invoices 
                INNER JOIN users ON user_id = users.id 
                WHERE email = ?'
        );

        echo '<pre>';
        print_r($fetchStmt->fetch(PDO::FETCH_ASSOC));
        echo '</pre>';

        return View::make('index', ['foo' => 'bar']);
    }

    public function download()
    {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="my_file.pdf"');

        readfile(STORAGE_PATH . '/BDJ1727977829341751.pdf');
    }

    public function upload()
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
        exit;
    }
}