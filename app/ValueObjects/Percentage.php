<?php

namespace App\ValueObjects;

use Illuminate\Support\Str;

class Percentage
{
    public function __construct(
        public readonly ?int $percentage
    ){
    }

    public function toString(): ?string
    {
        return $this->percentage
            ? Str::of($this->percentage)->append('%')->toString()
            : null;
    }
}
