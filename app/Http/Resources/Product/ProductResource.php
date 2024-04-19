<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $percentage = $this->discount_percentage;

        return [
            'sku' => $this->sku,
            'name' => $this->name,
            'category' => $this->category->name,
            'price' => [
                'original' => $this->price,
                 'final' => $this->final_price,
                 'discount_percentage' => $percentage->toString(),
                 'currency' => $this->currency->name,
            ]
        ];
    }
}
