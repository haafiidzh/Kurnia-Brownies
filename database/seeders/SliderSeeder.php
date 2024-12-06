<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slider = [
                ['title' => 'Slider 1', 'slug' => 'slider-1', 'image' => 'https://picsum.photos/id/19/800', 'description' => 'Delicious flaky croissant with a rich chocolate filling.', 'position' => '1',],
                ['title' => 'Slider 2', 'slug' => 'slider-2', 'image' => 'https://picsum.photos/id/22/800', 'description' => 'Delicious flaky croissant with a rich chocolate filling.', 'position' => '2',],
                ['title' => 'Slider 3', 'slug' => 'slider-3', 'image' => 'https://picsum.photos/id/33/800', 'description' => 'Delicious flaky croissant with a rich chocolate filling.', 'position' => '3',],
                ['title' => 'Slider 4', 'slug' => 'slider-4', 'image' => 'https://picsum.photos/id/44/800', 'description' => 'Delicious flaky croissant with a rich chocolate filling.', 'position' => '4',],
                ['title' => 'Slider 5', 'slug' => 'slider-5', 'image' => 'https://picsum.photos/id/55/800', 'description' => 'Delicious flaky croissant with a rich chocolate filling.', 'position' => '5',],
        ];

        
        foreach ($slider as $data) {
            Slider::updateOrCreate($data);
        }
    }
}
