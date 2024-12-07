<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Snacks', 'group' => 'product', 'slug' => slug('Snacks')],
            ['name' => 'Main Course', 'group' => 'product', 'slug' => slug('Main Course')],
            ['name' => 'Cold Beverages', 'group' => 'product', 'slug' => slug('Cold Beverages')],
            ['name' => 'Hot Beverages', 'group' => 'product', 'slug' => slug('Hot Beverages')],
            ['name' => 'Appetizers', 'group' => 'product', 'slug' => slug('Appetizers')],
        ];

        foreach ($categories as $data) {
            Categories::updateOrCreate($data);
        }
    }
}
