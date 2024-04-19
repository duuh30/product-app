<?php

namespace App\Filters;

use App\Enum\CategoryEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;

class CategoryFilter
{
    public function __invoke(Builder $builder): void
    {
        $categoryEnum = CategoryEnum::tryFromString(
            Request::string('category')
                ->toString()
        );

        $builder->when(
            $categoryEnum,
            fn (Builder $builder) => $builder->whereCategoryId(
                $categoryEnum
            )
        );
    }
}
