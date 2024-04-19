<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insuranceCategory = Category::whereName('insurance')->first();
        $insuranceCategory?->discount()->create(['percentage' => 30]);

        $skuThird = Product::whereSku('000003')->first();
        $skuThird?->discount()->create(['percentage' => 15]);
    }
}
