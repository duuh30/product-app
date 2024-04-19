<?php

namespace App\Services\Product;

use App\Filters\CategoryFilter;
use App\Filters\PriceFilter;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ProductService
{
    public function getAllProducts(array $filters = []): LengthAwarePaginator
    {
        return Product::query()
            ->with(['category.discount', 'currency', 'discount'])
            ->tap(new CategoryFilter)
            ->tap(new PriceFilter)
            ->paginate(
                perPage: data_get($filters, 'perPage', 5)
            );
    }
}
