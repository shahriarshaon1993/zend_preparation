<?php

namespace App\Classes;

class Invoice
{
    public function index()
    {
//        unset($_SESSION['count']);

        setcookie('user_name', 'Shaon', time() - (24 * 60 * 60));

        return 'Invoice';
    }

    public function create()
    {
        return '<form action="/invoices/create" method="post"><label>Amount</label><input type="text" name="amount" /></form>';
    }

    public function store()
    {
        $amount = $_POST['amount'];

        var_dump($amount);
    }
}