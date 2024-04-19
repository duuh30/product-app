<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;

class PriceFilter
{
    public function __invoke(Builder $builder): void
    {
        $priceFilter = Request::integer('price');

        $builder->when(
            $priceFilter,
            fn (Builder $builder) => $builder->wherePrice(
                $priceFilter
            )
        );
    }
}
