<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'insurance',
            'vehicle'
        ];

        foreach($categories as $category) {
            Category::firstOrCreate([
                'name' => $category
            ]);
        }
    }
}
