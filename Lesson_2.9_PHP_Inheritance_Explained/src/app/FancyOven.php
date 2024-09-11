<?php

namespace App;

class FancyOven
{
    public function __construct(private ToasterPro $toaster)
    {
    }

    public function fry()
    {
        // code here...
    }

    public function toast(): void
    {
        $this->toaster->toast();
    }

    public function toastBagel(): void
    {
        $this->toaster->toastBagel();
    }
}