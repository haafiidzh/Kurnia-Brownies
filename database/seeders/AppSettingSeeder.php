<?php

namespace Database\Seeders;

use App\Models\AppSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppSettingSeeder extends Seeder
{
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
                'type' => 'input',
            ],
            [
                'group' => 'website_general',
                'label' => 'Copyright',
                'key' => 'copyright',
                'value' => '© Copyright Kurnia Brownies 2024 Design by StyleShout Distribution ThemeWagon',
                'type' => 'input',
            ],
            [
                'group' => 'website_general',
                'label' => 'Logo',
                'key' => 'logo',
                'value' => '',
                'type' => 'image',
            ],
            [
                'group' => 'website_general',
                'label' => 'Logo Kecil',
                'key' => 'small_logo',
                'value' => '',
                'type' => 'image',
            ],
            [
                'group' => 'website_general',
                'label' => 'Icon',
                'key' => 'favicon',
                'value' => '',
                'type' => 'image',
            ],
            [
                'group' => 'website_general',
                'label' => 'Logo Footer',
                'key' => 'footer_logo',
                'value' => '',
                'type' => 'image',
            ],

            // Contact
            [
                'group' => 'contact',
                'label' => 'Email',
                'key' => 'contact_email',
                'value' => 'kurnia@brownies.com',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Whatsapp',
                'key' => 'contact_whatsapp',
                'value' => '08123444444',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Whatsapp',
                'key' => 'contact_whatsapp',
                'value' => '08123444444',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Alamat',
                'key' => 'contact_address',
                'value' => 'Jl. Adi Sucipto, Gatak, Blulukan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57174',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Alamat',
                'key' => 'contact_address',
                'value' => 'Jl. Adi Sucipto, Gatak, Blulukan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57174',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Maps',
                'key' => 'contact_maps_link',
                'value' => 'https://maps.app.goo.gl/KzKsUR47K1eHfVPc7',
                'type' => 'input',
            ],
            [
                'group' => 'contact',
                'label' => 'Embed Maps',
                'key' => 'contact_embed_maps',
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.324798475003!2d110.76000737404553!3d-7.539511774422359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15fdbcf0e459%3A0x1312f15edb264ce1!2sKurnia%20Brownies%20Bake%20and%20Brew!5e0!3m2!1sid!2sid!4v1734976986604!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'type' => 'input',
            ],

            // Social
            [
                'group' => 'social',
                'label' => 'Nama Instagram',
                'key' => 'social_instagram_name',
                'value' => 'kurniabrowniessolo',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Facebook',
                'key' => 'social_facebook_name',
                'value' => 'Kurnia Brownies Solo',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Twitter',
                'key' => 'social_twitter_name',
                'value' => 'kurniabrownies',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Tiktok',
                'key' => 'social_tiktok_name',
                'value' => 'kurniabrownies',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Nama Youtube',
                'key' => 'social_youtube_name',
                'value' => 'kurniabrownies',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Instagram',
                'key' => 'social_instagram_link',
                'value' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Facebook',
                'key' => 'social_facebook_link',
                'value' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Twitter',
                'key' => 'social_twitter_link',
                'value' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Tiktok',
                'key' => 'social_tiktok_link',
                'value' => '',
                'type' => 'input',
            ],
            [
                'group' => 'social',
                'label' => 'Alamat Youtube',
                'key' => 'social_youtube_link',
                'value' => '',
                'type' => 'input',
            ],
        ];

        foreach ($datas as $data) {
            AppSetting::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}
