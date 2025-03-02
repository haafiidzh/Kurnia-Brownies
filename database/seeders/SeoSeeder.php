<?php

namespace Database\Seeders;

use App\Models\Seo;
use App\Traits\Cacheable;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    use Cacheable;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            // Home
            [
                'group' => 'home',
                'label' => 'Judul',
                'key' => 'seo_judul_home',
                'value' => 'Kurnia Brownies - Brownies Premium',
                'tip' => 'Judul halaman dan judul utama yang muncul di hasil pencarian',
                'type' => 'input',
            ],
            [
                'group' => 'home',
                'label' => 'Deskripsi',
                'key' => 'seo_deskripsi_home',
                'value' => 'Kurnia Brownies menyajikan brownies premium dengan cita rasa autentik dan bahan berkualitas. Nikmati kelembutan setiap gigitan dengan berbagai varian rasa yang menggugah selera!',
                'tip' => 'Deskripsi singkat yang muncul di hasil pencarian',
                'type' => 'textarea',
            ],
            [
                'group' => 'home',
                'label' => 'Gambar',
                'key' => 'seo_gambar_home',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Gambar thumbnail yang digunakan saat dibagikan di media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'home',
                'label' => 'Keyword',
                'key' => 'seo_keyword_home',
                'value' => 'brownies premium, kurnia brownies, brownies enak, oleh-oleh brownies',
                'tip' => 'Kata kunci untuk optimasi pencarian (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],
            
            // About
            [
                'group' => 'about',
                'label' => 'Judul Tentang Kami',
                'key' => 'seo_judul_tentang',
                'value' => 'Tentang Kurnia Brownies - Sejarah dan Visi Kami',
                'tip' => 'Judul halaman untuk halaman Tentang Kami',
                'type' => 'input',
            ],
            [
                'group' => 'about',
                'label' => 'Deskripsi Tentang Kami',
                'key' => 'seo_deskripsi_tentang',
                'value' => 'Kurnia Brownies adalah brand yang menghadirkan brownies lezat dengan resep terbaik. Kenali lebih jauh tentang sejarah, visi, dan komitmen kami dalam menyajikan produk berkualitas.',
                'tip' => 'Deskripsi yang muncul di hasil pencarian halaman Tentang Kami',
                'type' => 'textarea',
            ],
            [
                'group' => 'about',
                'label' => 'Gambar Tentang Kami',
                'key' => 'seo_gambar_tentang',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Gambar default untuk preview halaman Tentang Kami di media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'about',
                'label' => 'Keyword Tentang Kami',
                'key' => 'seo_keyword_tentang',
                'value' => 'tentang kurnia, kurnia brownies, sejarah brownies, visi misi kurnia',
                'tip' => 'Kata kunci untuk optimasi pencarian halaman Tentang Kami (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],

            // Contact
            [
                'group' => 'contact',
                'label' => 'Judul Hubungi Kami',
                'key' => 'seo_judul_hubungi',
                'value' => 'Hubungi Kurnia Brownies - Kami Siap Membantu Anda',
                'tip' => 'Judul halaman untuk halaman Hubungi Kami',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Deskripsi Hubungi Kami',
                'key' => 'seo_deskripsi_hubungi',
                'value' => 'Butuh bantuan atau ingin bertanya tentang produk Kurnia Brownies? Hubungi kami melalui formulir kontak atau media sosial resmi kami.',
                'tip' => 'Deskripsi yang muncul di hasil pencarian halaman Hubungi Kami',
                'type' => 'textarea',
            ],
            [
                'group' => 'contact',
                'label' => 'Gambar Hubungi Kami',
                'key' => 'seo_gambar_hubungi',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Gambar default untuk preview halaman Hubungi Kami di media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'contact',
                'label' => 'Keyword Hubungi Kami',
                'key' => 'seo_keyword_hubungi',
                'value' => 'hubungi kurnia, kontak kurnia brownies, customer service kurnia, bantuan pelanggan',
                'tip' => 'Kata kunci untuk optimasi pencarian halaman Hubungi Kami (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],

            // Product
            [
                'group' => 'product',
                'label' => 'Judul Produk',
                'key' => 'seo_judul_produk',
                'value' => 'Kurnia Brownies - Varian Rasa Terbaik',
                'tip' => 'Judul halaman untuk halaman produk',
                'type' => 'input',
            ],
            [
                'group' => 'product',
                'label' => 'Deskripsi Produk',
                'key' => 'seo_deskripsi_produk',
                'value' => 'Temukan berbagai varian brownies premium dari Kurnia Brownies. Dibuat dengan bahan pilihan dan rasa yang lezat untuk menemani setiap momen spesial Anda.',
                'tip' => 'Deskripsi yang muncul di hasil pencarian halaman produk',
                'type' => 'textarea',
            ],
            [
                'group' => 'product',
                'label' => 'Gambar Produk',
                'key' => 'seo_gambar_produk',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Gambar default untuk halaman produk saat dibagikan ke media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'product',
                'label' => 'Keyword Produk',
                'key' => 'seo_keyword_produk',
                'value' => 'brownies coklat, brownies keju, brownies enak, varian brownies, Kurnia Brownies',
                'tip' => 'Kata kunci untuk optimasi pencarian halaman produk (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],
            
            // News
            [
                'group' => 'news',
                'label' => 'Judul Berita',
                'key' => 'seo_judul_berita',
                'value' => 'Berita Terbaru - Kurnia Brownies',
                'tip' => 'Judul halaman untuk halaman berita',
                'type' => 'input',
            ],
            [
                'group' => 'news',
                'label' => 'Deskripsi Berita',
                'key' => 'seo_deskripsi_berita',
                'value' => 'Temukan berita terbaru dan informasi menarik tentang Kurnia Brownies. Dapatkan update promo, event, dan perkembangan terbaru dari kami.',
                'tip' => 'Deskripsi yang muncul di hasil pencarian halaman berita',
                'type' => 'textarea',
            ],
            [
                'group' => 'news',
                'label' => 'Gambar Berita',
                'key' => 'seo_gambar_berita',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Gambar default untuk preview berita di media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'news',
                'label' => 'Keyword Berita',
                'key' => 'seo_keyword_berita',
                'value' => 'berita brownies, kurnia brownies, promo brownies, event brownies',
                'tip' => 'Kata kunci untuk optimasi pencarian berita (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],

            // Pricelist
            [
                'group' => 'pricelist',
                'label' => 'Judul',
                'key' => 'seo_judul_pricelist',
                'value' => 'Daftar Harga - Kurnia Brownies',
                'tip' => ' Judul halaman untuk halaman Pricelist',
                'type' => 'input',
            ],
            [
                'group' => 'pricelist',
                'label' => 'Deskripsi',
                'key' => 'seo_deskripsi_pricelist',
                'value' => 'Lihat daftar harga terbaru dari Kurnia Brownies. Kami menawarkan berbagai pilihan brownies premium dengan harga terbaik.',
                'tip' => 'Deskripsi singkat yang muncul di hasil pencarian',
                'type' => 'textarea',
            ],
            [
                'group' => 'pricelist',
                'label' => 'Gambar',
                'key' => 'seo_gambar_pricelist',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Gambar thumbnail yang digunakan saat dibagikan di media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'pricelist',
                'label' => 'Keyword',
                'key' => 'seo_keyword_pricelist',
                'value' => 'daftar harga brownies, harga brownies premium, harga kurnia brownies',
                'tip' => 'Kata kunci untuk optimasi pencarian (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],

            // FAQ
            [
                'group' => 'faq',
                'label' => 'Judul',
                'key' => 'seo_judul_faq',
                'value' => 'FAQ - Kurnia Brownies',
                'tip' => ' Judul halaman untuk halaman FAQ',
                'type' => 'input',
            ],
            [
                'group' => 'faq',
                'label' => 'Deskripsi',
                'key' => 'seo_deskripsi_faq',
                'value' => 'Daftar pertanyaan yang sering ditanyakan.',
                'tip' => 'Deskripsi singkat yang muncul di hasil pencarian',
                'type' => 'textarea',
            ],
            [
                'group' => 'faq',
                'label' => 'Gambar',
                'key' => 'seo_gambar_faq',
                'value' => 'assets/images/default/bronies.png',
                'tip' => 'Gambar thumbnail yang digunakan saat dibagikan di media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'faq',
                'label' => 'Keyword',
                'key' => 'seo_keyword_faq',
                'value' => 'faq, faq kurnia brownies, pertanyaan umum',
                'tip' => 'Kata kunci untuk optimasi pencarian (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],

            // Not Found
            [
                'group' => 'not_found',
                'label' => 'Judul',
                'key' => 'seo_judul_not_found',
                'value' => 'Halaman Tidak Ditemukan',
                'tip' => ' Judul halaman untuk halaman Not Found',
                'type' => 'input',
            ],
            [
                'group' => 'not_found',
                'label' => 'Deskripsi',
                'key' => 'seo_deskripsi_not_found',
                'value' => 'Halaman yang Anda cari tidak ditemukan.',
                'tip' => 'Deskripsi singkat yang muncul di hasil pencarian',
                'type' => 'textarea',
            ],
            [
                'group' => 'not_found',
                'label' => 'Gambar',
                'key' => 'seo_gambar_not_found',
                'value' => 'assets/images/default/404.png',
                'tip' => 'Gambar thumbnail yang digunakan saat dibagikan di media sosial',
                'type' => 'image',
            ],
            [
                'group' => 'not_found',
                'label' => 'Keyword',
                'key' => 'seo_keyword_not_found',
                'value' => 'not found, 404, error',
                'tip' => 'Kata kunci untuk optimasi pencarian (tulis menggunakan pemisah koma "," dan tanpa huruf kapital contoh : brownies, brownies coklat, brownies solo).',
                'type' => 'input',
            ],

            // PrivacyPolicy
            // [
            //     'group' => 'kebijakan privasi',
            //     'label' => 'Judul',
            //     'key' => 'seo_judul_privacy_policy',
            //     'value' => 'Kebijakan Privasi - Kurnia Brownies',
            //     'tip' => ' halaman dan judul utama yang muncul di hasil pencarian',
            //     'type' => 'input',
            // ],
            // [
            //     'group' => 'kebijakan privasi',
            //     'label' => 'Deskripsi',
            //     'key' => 'seo_deskripsi_privacy_policy',
            //     'value' => 'Baca Kebijakan Privasi Kurnia Brownies untuk memahami bagaimana kami mengelola informasi pribadi Anda secara aman dan terpercaya.',
            //     'tip' => 'Deskripsi singkat yang muncul di hasil pencarian',
            //     'type' => 'textarea',
            // ],
            // [
            //     'group' => 'kebijakan privasi',
            //     'label' => 'Gambar',
            //     'key' => 'seo_gambar_privacy_policy',
            //     'value' => 'assets/images/default/privacy_policy.png',
            //     'tip' => 'Gambar thumbnail yang digunakan saat dibagikan di media sosial',
            //     'type' => 'image',
            // ],
            // [
            //     'group' => 'kebijakan privasi',
            //     'label' => 'Keyword',
            //     'key' => 'seo_keyword_privacy_policy',
            //     'value' => 'kebijakan privasi, privasi data, keamanan data, Kurnia Brownies',
            //     'tip' => 'Kata kunci untuk optimasi pencarian (pisahkan dengan koma, tanpa kapital)',
            //     'type' => 'textarea',
            // ],
        ];

        foreach ($datas as $data) {
            Seo::updateOrCreate(['key' => $data['key']], $data);
            $this->updateCache($data['key'], $data['value']);
        }
    }
}
