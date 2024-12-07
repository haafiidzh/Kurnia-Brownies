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
            ['name' => 'Politics', 'group' => 'news', 'slug' => slug('Politics')],
            ['name' => 'Technology', 'group' => 'news', 'slug' => slug('Technology')],
            ['name' => 'Health', 'group' => 'news', 'slug' => slug('Health')],
            ['name' => 'Sports', 'group' => 'news', 'slug' => slug('Sports')],
            ['name' => 'Entertainment', 'group' => 'news', 'slug' => slug('Entertainment')],
        ];

        foreach ($categories as $data) {
            Categories::updateOrCreate($data);
        }
    }
}
