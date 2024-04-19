<?php

namespace Database\Seeders;

use App\Enum\CategoryEnum;
use App\Enum\CurrencyEnum;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                 "sku" => "000001",
                 "name" => "Full coverage insurance",
                 "currency_id" => CurrencyEnum::USD,
                 "category_id" => CategoryEnum::INSURANCE,
                 "price" => 89000,
            ],
            [
                "sku" => "000002",
                 "name" => "Compact Car X3",
                 "currency_id" => CurrencyEnum::USD,
                 "category_id" => CategoryEnum::VEHICLE,
                 "price" => 99000,
            ],
            [
                "sku" => "000003",
                 "name" => "SUV Vehicle, high end",
                 "currency_id" => CurrencyEnum::USD,
                 "category_id" => CategoryEnum::VEHICLE,
                 "price" => 150000,
            ],
            [
                 "sku" => "000004",
                 "name" => "Basic coverage",
                 "currency_id" => CurrencyEnum::USD,
                 "category_id" => CategoryEnum::INSURANCE,
                 "price" => 20000,
            ],
            [
                 "sku" => "000005",
                 "name" => "Convertible X2, Electric",
                 "currency_id" => CurrencyEnum::USD,
                 "category_id" => CategoryEnum::VEHICLE,
                 "price" => 250000,
            ],
        ];

        foreach($products as $product) {
            Product::firstOrCreate($product);
        }
    }
}
