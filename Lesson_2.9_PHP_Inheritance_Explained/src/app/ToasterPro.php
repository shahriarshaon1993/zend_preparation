<?php

declare(strict_types=1);

namespace App;

class ToasterPro extends Toaster
{
    public function __construct()
    {
        parent::__construct();

        $this->size = 4;
    }

    public function toastBagel(): void
    {
        foreach ($this->slices as $key => $slice) {
            echo ($key + 1) . ': Toasting ' . $slice . ' with bagels options' . PHP_EOL;
        }
    }
}