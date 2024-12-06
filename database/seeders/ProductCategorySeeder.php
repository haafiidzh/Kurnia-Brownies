<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Snacks', 'slug' => Str::slug('Snacks')],
            ['name' => 'Main Course', 'slug' => Str::slug('Main Course')],
            ['name' => 'Cold Beverages', 'slug' => Str::slug('Cold Beverages')],
            ['name' => 'Hot Beverages', 'slug' => Str::slug('Hot Beverages')],
            ['name' => 'Appetizers', 'slug' => Str::slug('Appetizers')],
        ];

        foreach ($categories as $data) {
            ProductCategory::updateOrCreate($data);
        }
    }
}
