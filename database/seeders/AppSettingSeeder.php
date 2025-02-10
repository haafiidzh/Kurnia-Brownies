<?php

namespace Database\Seeders;

use App\Models\AppSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Traits\Cacheable;

class AppSettingSeeder extends Seeder
{
    use Cacheable;
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            // General
            [
                'group' => 'website_general',
                'label' => 'Nama Website',
                'key' => 'app_name',
                'value' => 'Kurnia Brownies',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'website_general',
                'label' => 'Copyright',
                'key' => 'copyright',
                'value' => '© Kurnia Brownies 2025. All Rights Reserved.',
                'tip' => '',
                'type' => 'textarea',
            ],
            [
                'group' => 'website_general',
                'label' => 'Logo',
                'key' => 'logo',
                'value' => 'assets/images/default/logo_kurnia.png',
                'tip' => 'Wajib menggunakan format png.',
                'type' => 'image',
            ],
            [
                'group' => 'website_general',
                'label' => 'Logo Kecil',
                'key' => 'small_logo',
                'value' => 'assets/images/default/logo_kurnia.png',
                'tip' => 'Wajib menggunakan format png.',
                'type' => 'image',
            ],
            [
                'group' => 'website_general',
                'label' => 'Icon',
                'key' => 'favicon',
                'value' => 'assets/images/default/logo_kurnia.ico',
                'tip' => 'Wajib menggunakan format ico.',
                'type' => 'image',
            ],
            [
                'group' => 'website_general',
                'label' => 'Logo Footer',
                'key' => 'footer_logo',
                'value' => 'assets/images/default/logo_kurnia.png',
                'tip' => 'Wajib menggunakan format png.',
                'type' => 'image',
            ],
            [
                'group' => 'website_general',
                'label' => 'Deskripsi Footer',
                'key' => 'footer_description',
                'value' => 'Brownies panggang segar, hanya untuk Anda! Nikmati sajian hangat dan lezat kami.',
                'tip' => '',
                'type' => 'input',
            ],

            // Contact
            [
                'group' => 'contact',
                'label' => 'Email',
                'key' => 'contact-email',
                'value' => 'kurnia@gmail.com',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Whatsapp',
                'key' => 'contact-whatsapp',
                'value' => '08123444444',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Alamat',
                'key' => 'contact-address',
                'value' => 'Jl. Adi Sucipto, Gatak, Blulukan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57174',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Maps',
                'key' => 'contact-maps_link',
                'value' => 'https://maps.app.goo.gl/KzKsUR47K1eHfVPc7',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Embed Maps',
                'key' => 'contact-embed_maps',
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.324798475003!2d110.76000737404553!3d-7.539511774422359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15fdbcf0e459%3A0x1312f15edb264ce1!2sKurnia%20Brownies%20Bake%20and%20Brew!5e0!3m2!1sid!2sid!4v1734976986604!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'tip' => 'Buka link Google Maps lokasi Anda, lalu pilih bagikan. Klik pada bagian Sematkan Peta, salin link yang ada ke form ini.',
                'type' => 'input',
            ],

            // Merchant
            [
                'group' => 'merchant',
                'label' => 'Go Food',
                'key' => 'merchant-gofood_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'merchant',
                'label' => 'Grab Food',
                'key' => 'merchant-grabfood_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'merchant',
                'label' => 'Shopee Food',
                'key' => 'merchant-shopeefood_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],

            // Social
            [
                'group' => 'social',
                'label' => 'Nama Instagram',
                'key' => 'social-instagram_name',
                'value' => 'kurniabrowniessolo',
                'tip' => 'Social dinamis (isi jika Anda mempunyai akun di media sosial tersebut maka akan otomatis muncul di halaman Hubungi Kami dan Footer).',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Facebook',
                'key' => 'social-facebook_name',
                'value' => 'Kurnia Brownies Solo',
                'tip' => 'Social dinamis (isi jika Anda mempunyai akun di media sosial tersebut maka akan otomatis muncul di halaman Hubungi Kami dan Footer).',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Twitter',
                'key' => 'social-twitter_name',
                'value' => 'kurniabrownies',
                'tip' => 'Social dinamis (isi jika Anda mempunyai akun di media sosial tersebut maka akan otomatis muncul di halaman Hubungi Kami dan Footer).',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Tiktok',
                'key' => 'social-tiktok_name',
                'value' => 'kurniabrownies',
                'tip' => 'Social dinamis (isi jika Anda mempunyai akun di media sosial tersebut maka akan otomatis muncul di halaman Hubungi Kami dan Footer).',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Youtube',
                'key' => 'social-youtube_name',
                'value' => 'kurniabrownies',
                'tip' => 'Social dinamis (isi jika Anda mempunyai akun di media sosial tersebut maka akan otomatis muncul di halaman Hubungi Kami dan Footer).',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Instagram',
                'key' => 'social-instagram_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Facebook',
                'key' => 'social-facebook_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Twitter',
                'key' => 'social-twitter_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Tiktok',
                'key' => 'social-tiktok_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Youtube',
                'key' => 'social-youtube_link',
                'value' => '',
                'tip' => '',
                'type' => 'input',
            ],            
        ];

        foreach ($datas as $data) {
            AppSetting::updateOrCreate(['key' => $data['key']], $data);
            $this->updateCache($data['key'], $data['value']);
        }
    }
}
