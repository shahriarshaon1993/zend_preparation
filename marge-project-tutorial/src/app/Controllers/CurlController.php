<?php

namespace App\Controllers;

use App\Attributes\Get;
use App\Contracts\EmailValidationInterface;

class CurlController
{
    public function __construct(
        private EmailValidationInterface $emailValidationService
    ) {
    }

    #[Get('/curl')]
    public function index(): void
    {
        $email = 'shahriarshaon1993@gmail.com';
        $result = $this->emailValidationService->verify($email);

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }

    #[Get('/curl/abstract-email')]
    public function abstractEmail(): void
    {
        $email = 'shahriarshaon1993@gmail.com';
        $result = $this->emailValidationService->verify($email);

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
}