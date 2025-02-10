<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;
use App\Traits\Cacheable;

class ContentSeeder extends Seeder
{
    use Cacheable;
    
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
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'cta_product',
                'label' => 'Deskripsi CTA Produk',
                'key' => 'cta.product-description',
                'value' => 'Dapatkan produk terbaru kami sekarang dan nikmati manfaat eksklusif hanya untuk Anda. Penawaran waktu terbatas!',
                'tip' => '',
                'type' => 'input',
            ],

            /// Homepage
            // Start Homepage
            [
                'group' => 'homepage',
                'label' => 'Judul Tentang Kami',
                'key' => 'homepage.about-title',
                'value' => 'Selamat Datang di Kurnia Brownies',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Deskripsi Tentang Kami',
                'key' => 'homepage.about-description',
                'value' => 'Kurnia Brownies adalah pilihan terbaik bagi pecinta brownies dengan rasa autentik dan bahan berkualitas tinggi. Kami berkomitmen untuk menghadirkan produk terbaik dengan cita rasa istimewa.',
                'tip' => '',
                'type' => 'textarea',
            ],
            [
                'group' => 'homepage',
                'label' => 'Gambar Latar Tentang Kami',
                'key' => 'homepage.about-image',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Disarankan menggunakan gambar dengan format png tanpa background agar hasil dapat maksimal.',
                'type' => 'image',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Kenapa Harus Kami?',
                'key' => 'homepage.why_us-title',
                'value' => 'Kenapa Harus Kurnia Brownies?',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Gambar Kenapa Harus Kami? Section 1',
                'key' => 'homepage.why_us-image.1',
                'value' => '',
                'tip' => 'Disarankan menggunakan gambar dengan format png tanpa background agar hasil dapat maksimal.',
                'type' => 'image',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Kenapa Harus Kami? Section 1',
                'key' => 'homepage.why_us-title.1',
                'value' => 'Bahan Berkualitas',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Deskripsi Kenapa Harus Kami? Section 1',
                'key' => 'homepage.why_us-description.1',
                'value' => 'Kami hanya menggunakan bahan-bahan terbaik untuk memastikan setiap potongan brownies memiliki rasa yang lezat dan berkualitas.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Gambar Kenapa Harus Kami? Section 2',
                'key' => 'homepage.why_us-image.2',
                'value' => '',
                'tip' => 'Disarankan menggunakan gambar dengan format png tanpa background agar hasil dapat maksimal.',
                'type' => 'image',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Kenapa Harus Kami? Section 2',
                'key' => 'homepage.why_us-title.2',
                'value' => 'Proses Higienis',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Deskripsi Kenapa Harus Kami? Section 2',
                'key' => 'homepage.why_us-description.2',
                'value' => 'Kami memastikan setiap produk dibuat dengan standar kebersihan tinggi untuk memberikan keamanan dan kualitas terbaik.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Gambar Kenapa Harus Kami? Section 3',
                'key' => 'homepage.why_us-image.3',
                'value' => '',
                'tip' => 'Disarankan menggunakan gambar dengan format png tanpa background agar hasil dapat maksimal.',
                'type' => 'image',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Kenapa Harus Kami? Section 3',
                'key' => 'homepage.why_us-title.3',
                'value' => 'Rasa Autentik',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Deskripsi Kenapa Harus Kami? Section 3',
                'key' => 'homepage.why_us-description.3',
                'value' => 'Resep khas kami menghadirkan brownies dengan cita rasa autentik yang tidak bisa Anda temukan di tempat lain.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Terlaris',
                'key' => 'homepage.best_seller-title',
                'value' => 'Terlaris',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Produk',
                'key' => 'homepage.product-title',
                'value' => 'Produk',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Deskripsi Produk',
                'key' => 'homepage.product-description',
                'value' => 'Kami menawarkan berbagai varian brownies dengan kualitas terbaik, mulai dari rasa klasik hingga inovasi terbaru yang menggugah selera.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'homepage',
                'label' => 'Judul Berita Terbaru',
                'key' => 'homepage.news-title',
                'value' => 'Berita Terbaru',
                'tip' => '',
                'type' => 'input',
            ],
            // End Homepage

            /// About
            // Start About
            [
                'group' => 'about',
                'label' => 'Judul Halaman',
                'key' => 'about.page-title',
                'value' => 'Tentang Kami',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Halaman',
                'key' => 'about.page-description',
                'value' => 'Awal perjalanan kami dimulai',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Latar Belakang Utama',
                'key' => 'about.page-background-image',
                'value' => 'https://picsum.photos/id/42/1600/900',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau landscape (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],

            // Kurnia
            [
                'group' => 'about',
                'label' => 'Judul Bagian 1',
                'key' => 'about.section-title.1',
                'value' => "Tentang Kurnia",
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Bagian 1',
                'key' => 'about.section-description.1',
                'value' => "Kurnia Brownies adalah bisnis FnB yang telah berdiri sejak 1998, dimulai sebagai usaha rumahan hingga berkembang menjadi merek ikonik seperti sekarang. Dari menjual brownies dalam potongan kecil hingga menjual dalam ukuran aslinya pada 1999, Kurnia Brownies mencapai puncaknya pada 2004 hingga 2016. Kini, Kurnia Brownies memperluas bisnisnya dengan Coffee & Eatery untuk memenuhi kebutuhan pelanggan.",
                'tip' => '',
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Latar Belakang Bagian 1',
                'key' => 'about.page-background-section.1',
                'value' => 'assets/images/default/about/1.jpg',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau 1:1 (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],

            // Brownies
            [
                'group' => 'about',
                'label' => 'Judul Bagian 2',
                'key' => 'about.section-title.2',
                'value' => "Brownies",
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Bagian 2',
                'key' => 'about.section-description.2',
                'value' => "Nikmati perpaduan rasa yang sempurna dengan brownies khas kami. Dibuat dengan cinta dan ketelitian, setiap potongannya adalah kenikmatan yang luar biasa. Kombinasi bubuk kakao premium dan takaran mentega yang pas membuat brownies kami memiliki cita rasa yang tiada duanya.",
                'tip' => '',
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Latar Belakang Bagian 2',
                'key' => 'about.page-background-section.2',
                'value' => 'assets/images/default/about/2.jpg',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau 1:1 (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],

            // Coffee
            [
                'group' => 'about',
                'label' => 'Judul Bagian 3',
                'key' => 'about.section-title.3',
                'value' => "Coffee",
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Bagian 3',
                'key' => 'about.section-description.3',
                'value' => "Kami memahami bahwa secangkir kopi yang sempurna dimulai dari biji yang berkualitas. Dari espresso yang lembut hingga pour-over dengan karakter unik, setiap tegukan adalah perayaan dari seni meracik kopi.",
                'tip' => '',
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Latar Belakang Bagian 3',
                'key' => 'about.page-background-section.3',
                'value' => 'assets/images/default/about/3.jpg',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau 1:1 (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],

            // Eatery
            [
                'group' => 'about',
                'label' => 'Judul Bagian 4',
                'key' => 'about.section-title.4',
                'value' => "Eatery",
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Bagian 4',
                'key' => 'about.section-description.4',
                'value' => "Di restoran kami, bahan-bahan berkualitas menjadi sorotan utama. Kami menyajikan menu dengan bahan segar yang diperoleh dari sumber lokal, memastikan setiap hidangan penuh dengan rasa dan kesegaran alami.",
                'tip' => '',
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Latar Belakang Bagian 4',
                'key' => 'about.page-background-section.4',
                'value' => 'assets/images/default/about/4.jpeg',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau 1:1 (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],

            // Ambiance
            [
                'group' => 'about',
                'label' => 'Judul Bagian 5',
                'key' => 'about.section-title.5',
                'value' => "Ambiance",
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Bagian 5',
                'key' => 'about.section-description.5',
                'value' => "Desain interior menjadi aspek utama dalam kafe, baik itu kafe maupun restoran. Suasana yang nyaman dan menarik akan membuat pelanggan betah dan ingin kembali lagi. Arsitektur bergaya Skandinavia dengan elemen kayu akan memberikan nuansa hangat dan nyaman bagi pelanggan.",
                'tip' => '',
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Latar Belakang Bagian 5',
                'key' => 'about.page-background-section.5',
                'value' => 'assets/images/default/about/3.jpg',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau 1:1 (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],
            // End About

            // Product
            // Start Product
            [
                'group' => 'product',
                'label' => 'Judul Halaman',
                'key' => 'product.page-title',
                'value' => 'Produk Kami',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'product',
                'label' => 'Deskripsi Halaman',
                'key' => 'product.page-description',
                'value' => 'Temukan berbagai produk unggulan kami yang dibuat dengan bahan berkualitas tinggi dan cita rasa terbaik.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'product',
                'label' => 'Gambar Latar Belakang Utama',
                'key' => 'product.page-background-image',
                'value' => 'https://picsum.photos/id/42/1600/900',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau landscape (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],
            [
                'group' => 'product',
                'label' => 'Gambar Filter',
                'key' => 'product.filter-image',
                'value' => '',
                'tip' => 'Disarankan menggunakan gambar dengan format png tanpa background agar hasil dapat maksimal.',
                'type' => 'image',
            ],
            [
                'group' => 'product',
                'label' => 'Deskripsi Filter',
                'key' => 'product.filter-description',
                'value' => 'Kami menjamin kualitas terbaik untuk setiap produk yang kami tawarkan.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'product',
                'label' => 'Judul Produk Lainnya',
                'key' => 'product.other_priduct-title',
                'value' => 'Produk Lainnya',
                'tip' => '',
                'type' => 'input',
            ],
            // End Produk

            // News
            // Start News
            [
                'group' => 'news',
                'label' => 'Judul Halaman',
                'key' => 'news.page-title',
                'value' => 'Berita',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'news',
                'label' => 'Deskripsi Halaman',
                'key' => 'news.page-description',
                'value' => 'Dapatkan berita terbaru dan pembaruan menarik seputar produk serta layanan kami.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'news',
                'label' => 'Gambar Latar Belakang Utama',
                'key' => 'news.page-background-image',
                'value' => 'https://picsum.photos/id/42/1600/900',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau landscape (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],
            [
                'group' => 'news',
                'label' => 'Judul Section Berita Terpopuler',
                'key' => 'news.popular-title',
                'value' => 'Berita Terpopuler',
                'tip' => '',
                'type' => 'input',
            ],
            // End News


            // Contact
            // Start Contact
            [
                'group' => 'contact',
                'label' => 'Judul Halaman',
                'key' => 'contact.page-title',
                'value' => 'Hubungi Kami',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Deskripsi Halaman',
                'key' => 'contact.page-description',
                'value' => 'Kami senang mendengar pendapat dan pertanyaan Anda. Jangan ragu untuk menghubungi kami!',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Gambar Latar Belakang Utama',
                'key' => 'contact.page-background-image',
                'value' => 'https://picsum.photos/id/42/1600/900',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau landscape (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],
            [
                'group' => 'contact',
                'label' => 'Judul Section',
                'key' => 'contact.page-section-title',
                'value' => 'Kurnia Brownies',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Jam Buka',
                'key' => 'contact.open-hours',
                'value' => '08.00 - 24.00',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Judul Sosial Media',
                'key' => 'contact.socmed-title',
                'value' => 'Ikuti Kami',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Judul Merchant',
                'key' => 'contact.merchant-title',
                'value' => 'Merchant Kami',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Judul Umpan Balik',
                'key' => 'contact.feedback-title',
                'value' => 'Beri Tahu Kami',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Deskripsi Umpan Balik',
                'key' => 'contact.feedback-description',
                'value' => 'Kami selalu siap mendengar pendapat dan saran dari Anda. Silakan berikan umpan balik untuk membantu kami meningkatkan layanan.',
                'tip' => '',
                'type' => 'input',
            ],
            // End Contact

            // FAQ
            // Start FAQ
            [
                'group' => 'faq',
                'label' => 'Judul Halaman',
                'key' => 'faq.page-title',
                'value' => 'Pertanyaan Umum',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'faq',
                'label' => 'Deskripsi Halaman',
                'key' => 'faq.page-description',
                'value' => 'Temukan jawaban atas pertanyaan yang sering diajukan mengenai produk dan layanan kami.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'faq',
                'label' => 'Gambar Latar Belakang Utama',
                'key' => 'faq.page-background-image',
                'value' => 'https://picsum.photos/id/42/1600/900',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau landscape (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],
            // End FAQ

            // Pricelict
            // Start Pricelict
            [
                'group' => 'pricelist',
                'label' => 'Judul Halaman',
                'key' => 'pricelist.page-title',
                'value' => 'Pricelist',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'pricelist',
                'label' => 'Deskripsi Halaman',
                'key' => 'pricelist.page-description',
                'value' => 'Temukan produk Anda yang anda sukai dan banggakan!',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'pricelist',
                'label' => 'Gambar Latar Belakang Utama',
                'key' => 'pricelist.page-background-image',
                'value' => 'https://picsum.photos/id/42/1600/900',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau landscape (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],
            [
                'group' => 'pricelist',
                'label' => 'Tautan Pricelist',
                'key' => 'pricelist.link',
                'value' => 'https://drive.google.com/file/d/12XOq7pUYquYeOGtK4pV1C6nxJUEbhCxv/preview',
                'tip' => 'Salin tautan Google Drive Anda, lalu ganti pada bagian "/view" menjadi "/preview".',
                'type' => 'input',
            ],
            // End Pricelist

            // Privacy Policy
            // Start Privacy Policy
            [
                'group' => 'privacy_policy',
                'label' => 'Judul Halaman',
                'key' => 'privacy_policy.page-title',
                'value' => 'Kebijakan Privasi',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'privacy_policy',
                'label' => 'Deskripsi Halaman',
                'key' => 'privacy_policy.page-description',
                'value' => 'Kami berkomitmen untuk melindungi data pribadi Anda dan menjelaskan bagaimana informasi Anda digunakan.',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'privacy_policy',
                'label' => 'Gambar Latar Belakang Utama',
                'key' => 'privacy_policy.page-background-image',
                'value' => 'https://picsum.photos/id/42/1600/900',
                'tip' => 'Wajib menggunakan gambar dengan format aspect ratio 16:9 atau landscape (selalu gunakan gambar dengan resolusi terbaik agar hasil sesuai yang diharapkan).',
                'type' => 'image',
            ],
            // End Privacy Policy

        ];

        foreach ($content as $data) {
            Content::updateOrCreate(['key' => $data['key']], $data);
            $this->updateCache($data['key'], $data['value']);
        }
    }
}
