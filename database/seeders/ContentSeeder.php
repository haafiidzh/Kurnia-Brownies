<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = [
            
            // CTA Product
            [
                'group' => 'cta_product',
                'label' => 'Judul CTA Produk',
                'key' => 'cta.product-title',
                'value' => 'Mau beli brownies?',
                'type' => 'input',
            ],
            [
                'group' => 'cta_product',
                'label' => 'Deskripsi CTA Produk',
                'key' => 'cta.product-description',
                'value' => 'Ayo beli sekarang',
                'type' => 'input',
            ],

            // Homepage
            [
                'group' => 'homepage',
                'label' => 'Judul Tentang Kami',
                'key' => 'homepage.about-title',
                'value' => 'Kurnia Brownies',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Deskripsi Tentang Kami',
                'key' => 'homepage.about-description',
                'value' => 'Kurnia Brownies is an FnB business that has been around since 1998, starting as a home business and growing into the iconic name it is today. From selling brownies in small pieces to selling them in their original size in 1999, Kurnia Brownies reached its peak in 2004 until 2016. Now, Kurnia Brownies expanding its business into Coffee and Eatery to provide the customer needs.',
                'type' => 'textarea',
            ],
            [
                'group' => 'homepage',
                'label' => 'Gambar Latar Tentang Kami',
                'key' => 'homepage.about-image.1',
                'value' => 'assets/images/default/bronies.png',
                'type' => 'image',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Kategori',
                'key' => 'homepage.categories-title',
                'value' => 'Kategori',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Produk',
                'key' => 'homepage.product-title',
                'value' => 'Produk Kami',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Subjudul Produk',
                'key' => 'homepage.product-subtitle',
                'value' => 'Rekomendasi',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Berita',
                'key' => 'homepage.news-title',
                'value' => 'Berita Terbaru',
                'type' => 'input',
            ],

            // About
            [
                'group' => 'about',
                'label' => 'Judul Halaman',
                'key' => 'about.page-title',
                'value' => 'Kurnia Brownies Solo',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Subjudul Halaman',
                'key' => 'about.page-subtitle',
                'value' => 'About Us',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Background Utama',
                'key' => 'about.page-background-image',
                'value' => 'https://picsum.photos/id/15/800',
                'type' => 'image',
            ],
            [
                'group' => 'about',
                'label' => 'Tentang Kami Utama',
                'key' => 'about.page-description.main',
                'value' => 'Kurnia Brownies is an FnB business that has been around since 1998, starting as a home business and growing into the iconic name it is today. From selling brownies in small pieces to selling them in their original size in 1999, Kurnia Brownies reached its peak in 2004 until 2016. Now, Kurnia Brownies expanding its business into Coffee and Eatery to provide the customer needs.',
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Judul Section 1',
                'key' => 'about.section-title.1',
                'value' => "Ambience",
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Section 1',
                'key' => 'about.section-description.1',
                'value' => "Interior design is the main aspect when it comes to a cafe, whether it's a café or a restaurant. It's important for the customers to have a good impression of the place so that they can feel comfortable and want to come back again. The interior design of Kurnia Brownies is the main aspect that will make it stand out from other cafes. The Scandinavian-style architecture with lots of wood and furnished parts will give a cozy ambiance to customers, which makes you stay longer at the café.",
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Background Section 1',
                'key' => 'about.page-background-section.1',
                'value' => 'https://picsum.photos/id/15/800',
                'type' => 'image',
            ],
            [
                'group' => 'about',
                'label' => 'Judul Section 2',
                'key' => 'about.section-title.2',
                'value' => "Brownies",
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Section 2',
                'key' => 'about.section-description.2',
                'value' => "Indulge in the perfect harmony of flavors as we unveil our signature brownies. Crafted with love and precision, each velvety square is a symphony of indulgence. The combination of premium cocoa powder and just the right amount of butter elevates our brownies to unparalleled levels of indulgence. It's a culinary dance of textures and flavors that will leave you craving for more.",
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Background Section 2',
                'key' => 'about.page-background-section.2',
                'value' => 'https://picsum.photos/id/25/800',
                'type' => 'image',
            ],
            [
                'group' => 'about',
                'label' => 'Judul Section 3',
                'key' => 'about.section-title.3',
                'value' => "Coffee",
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Section 3',
                'key' => 'about.section-description.3',
                'value' => "Let us guide you through the tantalizing world of our coffee. We understand that a perfect cup of coffee starts with exceptional beans. From the smooth, velvety notes of our espresso to the rich, vibrant profiles of our single-origin pour-overs, each sip is a celebration of coffee craftsmanship. We believe that every coffee lover deserves to experience the true essence of their chosen brew, and our commitment to using premium beans ensures a transcendental coffee experience that delights the senses.",
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Judul Section 4',
                'key' => 'about.section-title.4',
                'value' => "Eatery",
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Section 4',
                'key' => 'about.section-description.4',
                'value' => "step into our eatery, where premium ingredients take center stage. We curate a menu that pays homage to locally sourced, seasonal produce, ensuring that every dish bursts with freshness and flavor. From vibrant, crisp vegetables to succulent, free-range meats, every ingredient is carefully selected to showcase its innate qualities. We believe in honoring the integrity of each component, allowing its natural flavors to shine through in our thoughtfully crafted dishes. With every bite, you embark on a culinary adventure that celebrates the essence of premium ingredients.",
                'type' => 'textarea',
            ],
        ];

        foreach ($content as $data) {
            Content::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}
