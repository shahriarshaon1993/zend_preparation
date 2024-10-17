<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        $name = 'Dom';
        $email = 'dom@gmail.com';
        $password = 'adsda@1';
        $amount = 25;

        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
            ['name' => $name, 'email' => $email, 'password' => $password],
            ['amount' => $amount]
        );

        return View::make('index', [
            'invoice' => $invoiceModel->find($invoiceId)
        ]);
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