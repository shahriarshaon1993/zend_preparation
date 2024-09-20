<?php

namespace App;

class ClassA
{
    public function __construct(
        public int $x,
        public int $y
    ){
    }

    public function foo(): string
    {
        return 'foo';
    }

    public function bar(): object
    {
        return new class($this->x, $this->y) extends ClassA
        {
            public function __construct(public int $x, public int $y)
            {
                parent::__construct($x, $y);

                $this->foo();
            }
        };
    }
}