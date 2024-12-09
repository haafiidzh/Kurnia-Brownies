<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Categories::where('group', 'news')->pluck('id')->toArray();

        $news = [
            [
                'title' => 'Exploring the Future of AI',
                'slug' => slug('Exploring the Future of AI'),
                'subject' => 'Artificial Intelligence shaping our world',
                'description' => '<p>AI technology is advancing rapidly, offering innovative solutions across industries.</p>',
                'image' => 'https://picsum.photos/id/81/800',
                'is_active' => true,
                'tags' => 'AI, technology, future',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'The Rise of Renewable Energy',
                'slug' => slug('The Rise of Renewable Energy'),
                'subject' => 'How renewable energy is transforming industries.',
                'description' => '<p>Discover the power of renewable energy sources in combating climate change.</p>',
                'image' => 'https://picsum.photos/id/82/800',
                'is_active' => true,
                'tags' => 'energy, climate change, renewables',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Healthy Eating Habits',
                'slug' => slug('Healthy Eating Habits'),
                'subject' => 'Simple ways to improve your daily diet.',
                'description' => '<p>Learn how to incorporate healthy eating habits into your routine.</p>',
                'image' => 'https://picsum.photos/id/83/800',
                'is_active' => true,
                'tags' => 'health, food, wellness',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Global Travel Destinations',
                'slug' => slug('Global Travel Destinations'),
                'subject' => 'Top places to visit in 2024.',
                'description' => '<p>Plan your next adventure with our list of top travel destinations.</p>',
                'image' => 'https://picsum.photos/id/84/800',
                'is_active' => true,
                'tags' => 'travel, destinations, adventure',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'The Evolution of E-Commerce',
                'slug' => slug('The Evolution of E-Commerce'),
                'subject' => 'E-Commerce trends for the upcoming year.',
                'description' => '<p>Stay ahead with insights into the evolution of e-commerce platforms.</p>',
                'image' => 'https://picsum.photos/id/85/800',
                'is_active' => true,
                'tags' => 'ecommerce, technology, trends',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Fitness Tips for Beginners',
                'slug' => slug('Fitness Tips for Beginners'),
                'subject' => 'How to start your fitness journey.',
                'description' => '<p>Find simple and effective tips to kickstart your fitness goals.</p>',
                'image' => 'https://picsum.photos/id/99/800',
                'is_active' => true,
                'tags' => 'fitness, health, beginners',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Top 10 Coding Languages in 2024',
                'slug' => slug('Top 10 Coding Languages in 2024'),
                'subject' => 'Languages shaping the tech industry.',
                'description' => '<p>Explore the top 10 coding languages every developer should know in 2024.</p>',
                'image' => 'https://picsum.photos/id/87/800',
                'is_active' => true,
                'tags' => 'coding, technology, programming',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Eco-Friendly Lifestyle Hacks',
                'slug' => slug('Eco-Friendly Lifestyle Hacks'),
                'subject' => 'How to live sustainably in a modern world.',
                'description' => '<p>Learn small steps to make a big impact on the environment.</p>',
                'image' => 'https://picsum.photos/id/88/800',
                'is_active' => true,
                'tags' => 'sustainability, environment, lifestyle',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Advances in Healthcare Technology',
                'slug' => slug('Advances in Healthcare Technology'),
                'subject' => 'Technology revolutionizing the medical field.',
                'description' => '<p>See how innovations are improving healthcare globally.</p>',
                'image' => 'https://picsum.photos/id/89/800',
                'is_active' => true,
                'tags' => 'healthcare, technology, innovation',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Mastering the Art of Baking',
                'slug' => slug('Mastering the Art of Baking'),
                'subject' => 'Easy tips for perfect baked goods.',
                'description' => '<p>Unlock the secrets to baking delicious cakes, cookies, and more.</p>',
                'image' => 'https://picsum.photos/id/10/800',
                'is_active' => true,
                'tags' => 'baking, food, cooking',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'The Importance of Mental Health',
                'slug' => slug('The Importance of Mental Health'),
                'subject' => 'How to care for your mind.',
                'description' => '<p>Understand why mental health is just as important as physical health.</p>',
                'image' => 'https://picsum.photos/id/11/800',
                'is_active' => true,
                'tags' => 'mental health, wellness, care',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Digital Marketing Strategies',
                'slug' => slug('Digital Marketing Strategies'),
                'subject' => 'Boost your online presence effectively.',
                'description' => '<p>Discover key strategies to enhance your digital marketing efforts.</p>',
                'image' => 'https://picsum.photos/id/12/800',
                'is_active' => true,
                'tags' => 'marketing, business, digital',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Exploring Space: The Final Frontier',
                'slug' => slug('Exploring Space: The Final Frontier'),
                'subject' => 'Latest updates in space exploration.',
                'description' => '<p>From Mars missions to new galaxies, space exploration is thriving.</p>',
                'image' => 'https://picsum.photos/id/13/800',
                'is_active' => true,
                'tags' => 'space, science, exploration',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'The Art of Minimalist Living',
                'slug' => slug('The Art of Minimalist Living'),
                'subject' => 'How to declutter and find peace.',
                'description' => '<p>Embrace the minimalist lifestyle to simplify and enrich your life.</p>',
                'image' => 'https://picsum.photos/id/14/800',
                'is_active' => true,
                'tags' => 'minimalism, lifestyle, peace',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Understanding Cryptocurrency',
                'slug' => slug('Understanding Cryptocurrency'),
                'subject' => 'A beginner\'s guide to digital currencies.',
                'description' => '<p>Learn the basics of cryptocurrency and how it works.</p>',
                'image' => 'https://picsum.photos/id/15/800',
                'is_active' => true,
                'tags' => 'cryptocurrency, finance, blockchain',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'The Power of Meditation',
                'slug' => slug('The Power of Meditation'),
                'subject' => 'Benefits of mindfulness practices.',
                'description' => '<p>Meditation can transform your mental and physical well-being.</p>',
                'image' => 'https://picsum.photos/id/16/800',
                'is_active' => true,
                'tags' => 'meditation, wellness, mindfulness',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Tech Innovations in Education',
                'slug' => slug('Tech Innovations in Education'),
                'subject' => 'How technology is reshaping learning.',
                'description' => '<p>From virtual classrooms to AI tutors, education is going digital.</p>',
                'image' => 'https://picsum.photos/id/17/800',
                'is_active' => true,
                'tags' => 'education, technology, learning',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Exploring Ancient History',
                'slug' => slug('Exploring Ancient History'),
                'subject' => 'Unveiling the secrets of the past.',
                'description' => '<p>Delve into the fascinating world of ancient civilizations.</p>',
                'image' => 'https://picsum.photos/id/18/800',
                'is_active' => true,
                'tags' => 'history, archaeology, culture',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'The Benefits of Yoga',
                'slug' => slug('The Benefits of Yoga'),
                'subject' => 'Why yoga is good for the body and mind.',
                'description' => '<p>Discover how yoga can improve flexibility, strength, and peace of mind.</p>',
                'image' => 'https://picsum.photos/id/19/800',
                'is_active' => true,
                'tags' => 'yoga, health, fitness',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
            [
                'title' => 'Building Resilience in Tough Times',
                'slug' => slug('Building Resilience in Tough Times'),
                'subject' => 'How to stay strong in adversity.',
                'description' => '<p>Learn strategies to develop resilience and overcome challenges.</p>',
                'image' => 'https://picsum.photos/id/20/800',
                'is_active' => true,
                'tags' => 'resilience, motivation, life',
                'published_at' => now(),
                'category_id' => $this->getRandomCategoryId($categoryIds)
            ],
        ];

        foreach ($news as $data) {
            News::updateOrCreate($data);
        }
    }

    private function getRandomCategoryId(array $categoryIds): ?string
    {
        return count($categoryIds) > 0 ? $categoryIds[array_rand($categoryIds)] : null;
    }
}
