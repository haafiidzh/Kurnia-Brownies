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
            [
                'name' => 'Snacks',
                'group' => 'product',
                'slug' => slug('Snacks'),
                'description' => 'Light and crispy bites to satisfy your hunger.',
            ],
            [
                'name' => 'Main Course',
                'group' => 'product',
                'slug' => slug('Main Course'),
                'description' => 'Delicious dishes to fill you up.',
            ],
            [
                'name' => 'Cold Beverages',
                'group' => 'product',
                'slug' => slug('Cold Beverages'),
                'description' => 'Refreshing cold drinks for any occasion.',
            ],
            [
                'name' => 'Hot Beverages',
                'group' => 'product',
                'slug' => slug('Hot Beverages'),
                'description' => 'Warm drinks to keep you cozy.',
            ],
            [
                'name' => 'Appetizers',
                'group' => 'product',
                'slug' => slug('Appetizers'),
                'description' => 'Start your meal with our mouth-watering starters.',
            ],
        ];

        foreach ($categories as $data) {
            Categories::updateOrCreate($data);
        }
    }
}
