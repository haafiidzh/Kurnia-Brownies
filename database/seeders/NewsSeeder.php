<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        $news = [
            [
                'title' => 'Exploring the Future of AI',
                'slug' => slug('Exploring the Future of AI'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Artificial Intelligence shaping our world',
                'description' => '<p>AI technology is advancing rapidly, offering innovative solutions across industries.</p>',
                'image' => 'https://picsum.photos/id/81/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'The Rise of Renewable Energy',
                'slug' => slug('The Rise of Renewable Energy'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'How renewable energy is transforming industries.',
                'description' => '<p>Discover the power of renewable energy sources in combating climate change.</p>',
                'image' => 'https://picsum.photos/id/82/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Healthy Eating Habits',
                'slug' => slug('Healthy Eating Habits'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Simple ways to improve your daily diet.',
                'description' => '<p>Learn how to incorporate healthy eating habits into your routine.</p>',
                'image' => 'https://picsum.photos/id/83/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Global Travel Destinations',
                'slug' => slug('Global Travel Destinations'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Top places to visit in 2024.',
                'description' => '<p>Plan your next adventure with our list of top travel destinations.</p>',
                'image' => 'https://picsum.photos/id/84/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'The Evolution of E-Commerce',
                'slug' => slug('The Evolution of E-Commerce'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'E-Commerce trends for the upcoming year.',
                'description' => '<p>Stay ahead with insights into the evolution of e-commerce platforms.</p>',
                'image' => 'https://picsum.photos/id/85/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Fitness Tips for Beginners',
                'slug' => slug('Fitness Tips for Beginners'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'How to start your fitness journey.',
                'description' => '<p>Find simple and effective tips to kickstart your fitness goals.</p>',
                'image' => 'https://picsum.photos/id/99/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Top 10 Coding Languages in 2024',
                'slug' => slug('Top 10 Coding Languages in 2024'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Languages shaping the tech industry.',
                'description' => '<p>Explore the top 10 coding languages every developer should know in 2024.</p>',
                'image' => 'https://picsum.photos/id/87/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Eco-Friendly Lifestyle Hacks',
                'slug' => slug('Eco-Friendly Lifestyle Hacks'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'How to live sustainably in a modern world.',
                'description' => '<p>Learn small steps to make a big impact on the environment.</p>',
                'image' => 'https://picsum.photos/id/88/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Advances in Healthcare Technology',
                'slug' => slug('Advances in Healthcare Technology'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Technology revolutionizing the medical field.',
                'description' => '<p>See how innovations are improving healthcare globally.</p>',
                'image' => 'https://picsum.photos/id/89/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Mastering the Art of Baking',
                'slug' => slug('Mastering the Art of Baking'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Easy tips for perfect baked goods.',
                'description' => '<p>Unlock the secrets to baking delicious cakes, cookies, and more.</p>',
                'image' => 'https://picsum.photos/id/10/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'The Importance of Mental Health',
                'slug' => slug('The Importance of Mental Health'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'How to care for your mind.',
                'description' => '<p>Understand why mental health is just as important as physical health.</p>',
                'image' => 'https://picsum.photos/id/11/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Digital Marketing Strategies',
                'slug' => slug('Digital Marketing Strategies'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Boost your online presence effectively.',
                'description' => '<p>Discover key strategies to enhance your digital marketing efforts.</p>',
                'image' => 'https://picsum.photos/id/12/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Exploring Space: The Final Frontier',
                'slug' => slug('Exploring Space: The Final Frontier'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Latest updates in space exploration.',
                'description' => '<p>From Mars missions to new galaxies, space exploration is thriving.</p>',
                'image' => 'https://picsum.photos/id/13/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'The Art of Minimalist Living',
                'slug' => slug('The Art of Minimalist Living'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'How to declutter and find peace.',
                'description' => '<p>Embrace the minimalist lifestyle to simplify and enrich your life.</p>',
                'image' => 'https://picsum.photos/id/14/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Understanding Cryptocurrency',
                'slug' => slug('Understanding Cryptocurrency'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'A beginner\'s guide to digital currencies.',
                'description' => '<p>Learn the basics of cryptocurrency and how it works.</p>',
                'image' => 'https://picsum.photos/id/15/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'The Power of Meditation',
                'slug' => slug('The Power of Meditation'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Benefits of mindfulness practices.',
                'description' => '<p>Meditation can transform your mental and physical well-being.</p>',
                'image' => 'https://picsum.photos/id/16/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Tech Innovations in Education',
                'slug' => slug('Tech Innovations in Education'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'How technology is reshaping learning.',
                'description' => '<p>From virtual classrooms to AI tutors, education is going digital.</p>',
                'image' => 'https://picsum.photos/id/17/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Exploring Ancient History',
                'slug' => slug('Exploring Ancient History'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Unveiling the secrets of the past.',
                'description' => '<p>Delve into the fascinating world of ancient civilizations.</p>',
                'image' => 'https://picsum.photos/id/18/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'The Benefits of Yoga',
                'slug' => slug('The Benefits of Yoga'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'Why yoga is good for the body and mind.',
                'description' => '<p>Discover how yoga can improve flexibility, strength, and peace of mind.</p>',
                'image' => 'https://picsum.photos/id/19/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
            [
                'title' => 'Building Resilience in Tough Times',
                'slug' => slug('Building Resilience in Tough Times'),
                'keywords' => 'berita terbaru, kurnia, artikel, kurnia brownies',
                'subject' => 'How to stay strong in adversity.',
                'description' => '<p>Learn strategies to develop resilience and overcome challenges.</p>',
                'image' => 'https://picsum.photos/id/20/1600/900',
                'is_active' => true,
                'created_by' => $user->id,
                'published_at' => now(),
            ],
        ];

        foreach ($news as $data) {
            News::updateOrCreate($data);
        }
    }
}
