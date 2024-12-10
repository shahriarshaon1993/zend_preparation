<?php

namespace App\Examples\Covariance;

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}