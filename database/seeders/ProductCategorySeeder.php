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
                'image' => 'https://picsum.photos/id/101/800',
            ],
            [
                'name' => 'Main Course',
                'group' => 'product',
                'slug' => slug('Main Course'),
                'description' => 'Delicious dishes to fill you up.',
                'image' => 'https://picsum.photos/id/102/800',
            ],
            [
                'name' => 'Cold Beverages',
                'group' => 'product',
                'slug' => slug('Cold Beverages'),
                'description' => 'Refreshing cold drinks for any occasion.',
                'image' => 'https://picsum.photos/id/103/800',
            ],
            [
                'name' => 'Hot Beverages',
                'group' => 'product',
                'slug' => slug('Hot Beverages'),
                'description' => 'Warm drinks to keep you cozy.',
                'image' => 'https://picsum.photos/id/104/800',
            ],
            [
                'name' => 'Appetizers',
                'group' => 'product',
                'slug' => slug('Appetizers'),
                'description' => 'Start your meal with our mouth-watering starters.',
                'image' => 'https://picsum.photos/id/110/800',
            ],
        ];

        foreach ($categories as $data) {
            Categories::updateOrCreate($data);
        }
    }
}
