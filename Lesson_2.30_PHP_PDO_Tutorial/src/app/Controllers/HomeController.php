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
            $db = new PDO('mysql:host=db;dbname=my_db;', 'root', 'root', [
                PDO::ATTR_EMULATE_PREPARES => false
            ]);

            $name = 'Dom';
            $email = 'dom3@gmail.com';
            $password = 'hello@1';
            $active = 1;
            $createdAt = date('Y-m-d H:m:i', strtotime('07/11/2024 9:00PM'));
            $updatedAt = date('Y-m-d H:m:i', strtotime('07/11/2024 9:00PM'));

            $query = 'INSERT INTO users (name, email, password, active, created_at, updated_at)
                        VALUES (:name, :email, :password, :active, :created_at, :updated_at)';

            $stmt = $db->prepare($query);

            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', $password);
            $stmt->bindParam(':active', $active, PDO::PARAM_BOOL);
            $stmt->bindValue(':created_at', $createdAt);
            $stmt->bindValue(':updated_at', $updatedAt);

            $stmt->execute();

            $id = (int) $db->lastInsertId();

            $user = $db->query('SELECT * FROM users WHERE id = '. $id)->fetch();

            echo '<pre>';
            print_r($user);
            echo '</pre>';
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

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