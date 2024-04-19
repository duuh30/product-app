<?php

namespace App\ValueObjects;

class Price
{
    public function __construct(
        private readonly int $price,
        private readonly int $percentage
    ){
    }

    public function percentage(): float
    {
        return round($this->price * (1 - ($this->percentage / 100)));
    }
}
