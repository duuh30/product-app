<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Services\Product\ProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class ProductController extends Controller
{
    public function __construct(
        private readonly ProductService $productService
    ){
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $products = $this->productService->getAllProducts(
            filters: $request->query()
        );

        return ProductResource::collection($products);
    }
}
