<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'What is Laravel?',
                'answer' => 'Laravel is a web application framework with expressive, elegant syntax.',
                'slug' => 'what-is-laravel',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'How to install Laravel?',
                'answer' => 'You can install Laravel using Composer by running "composer create-project laravel/laravel your-project-name".',
                'slug' => 'how-to-install-laravel',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'What is MVC in Laravel?',
                'answer' => 'MVC stands for Model-View-Controller. It is a design pattern used by Laravel to organize code.',
                'slug' => 'what-is-mvc-in-laravel',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Apa itu Kurnia?',
                'answer' => 'Laravel is a web application framework with expressive, elegant syntax.',
                'slug' => 'apa-itu-kurnia',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Apa itu Nova?',
                'answer' => 'You can install Laravel using Composer by running "composer create-project laravel/laravel your-project-name".',
                'slug' => 'apa-itu-nova',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana cara mesennya?',
                'answer' => 'MVC stands for Model-View-Controller. It is a design pattern used by Laravel to organize code.',
                'slug' => 'bagaimana-cara-mesennya-in-laravel',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'question' => 'La Mboh?',
                'answer' => 'MVC stands for Model-View-Controller. It is a design pattern used by Laravel to organize code.',
                'slug' => 'La-mboh',
                'sort_order' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
