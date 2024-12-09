<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Politics',
                'group' => 'news',
                'slug' => slug('Politics'),
                'description' => 'Covers all political news and updates globally.',
                'image' => 'https://picsum.photos/id/11/800',
            ],
            [
                'name' => 'Technology',
                'group' => 'news',
                'slug' => slug('Technology'),
                'description' => 'The latest in tech innovations and trends.',
                'image' => 'https://picsum.photos/id/22/800',
            ],
            [
                'name' => 'Health',
                'group' => 'news',
                'slug' => slug('Health'),
                'description' => 'News on health tips, breakthroughs, and more.',
                'image' => 'https://picsum.photos/id/33/800',
            ],
            [
                'name' => 'Sports',
                'group' => 'news',
                'slug' => slug('Sports'),
                'description' => 'Updates from the world of sports.',
                'image' => 'https://picsum.photos/id/44/800',
            ],
            [
                'name' => 'Entertainment',
                'group' => 'news',
                'slug' => slug('Entertainment'),
                'description' => 'Latest entertainment news and celebrity gossip.',
                'image' => 'https://picsum.photos/id/55/800',
            ],
        ];

        foreach ($categories as $data) {
            Categories::updateOrCreate($data);
        }
    }
}
