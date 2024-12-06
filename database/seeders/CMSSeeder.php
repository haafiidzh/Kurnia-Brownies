<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cms;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cmsData = [
            // General Group
            ['group' => 'general', 'label' => 'Site Title', 'key' => 'site-title', 'value' => 'Kurnia Project', 'type' => 'input'],
            ['group' => 'general', 'label' => 'Site Description', 'key' => 'site-description', 'value' => 'This is the description of Kurnia website.', 'type' => 'textarea'],
            ['group' => 'general', 'label' => 'Logo', 'key' => 'site-logo', 'value' => 'logo.png', 'type' => 'image'],
            ['group' => 'general', 'label' => 'Favicon', 'key' => 'site-favicon', 'value' => 'favicon.ico', 'type' => 'image'],
            ['group' => 'general', 'label' => 'Contact Email', 'key' => 'contact-email', 'value' => 'info@kurnia.com', 'type' => 'input'],
            ['group' => 'general', 'label' => 'Contact Phone', 'key' => 'contact-phone', 'value' => '+6281234567890', 'type' => 'input'],
            ['group' => 'general', 'label' => 'Footer Text', 'key' => 'footer-text', 'value' => '© 2024 Kurnia Project', 'type' => 'textarea'],
            ['group' => 'general', 'label' => 'Header Script', 'key' => 'header-script', 'value' => '<script>/* header script */</script>', 'type' => 'textarea'],
            ['group' => 'general', 'label' => 'Footer Script', 'key' => 'footer-script', 'value' => '<script>/* footer script */</script>', 'type' => 'textarea'],
            ['group' => 'general', 'label' => 'Homepage Banner', 'key' => 'homepage-banner', 'value' => 'banner.jpg', 'type' => 'image'],

            // Social Group
            ['group' => 'social', 'label' => 'Facebook URL', 'key' => 'facebook-url', 'value' => 'https://facebook.com/kurnia', 'type' => 'input'],
            ['group' => 'social', 'label' => 'Twitter URL', 'key' => 'twitter-url', 'value' => 'https://twitter.com/kurnia', 'type' => 'input'],
            ['group' => 'social', 'label' => 'LinkedIn URL', 'key' => 'linkedin-url', 'value' => 'https://linkedin.com/company/kurnia', 'type' => 'input'],
            ['group' => 'social', 'label' => 'Instagram URL', 'key' => 'instagram-url', 'value' => 'https://instagram.com/kurnia', 'type' => 'input'],
            ['group' => 'social', 'label' => 'YouTube URL', 'key' => 'youtube-url', 'value' => 'https://youtube.com/kurnia', 'type' => 'input'],
            ['group' => 'social', 'label' => 'Facebook Banner', 'key' => 'facebook-banner', 'value' => 'facebook-banner.jpg', 'type' => 'image'],
            ['group' => 'social', 'label' => 'Instagram Banner', 'key' => 'instagram-banner', 'value' => 'instagram-banner.jpg', 'type' => 'image'],
            ['group' => 'social', 'label' => 'Twitter Banner', 'key' => 'twitter-banner', 'value' => 'twitter-banner.jpg', 'type' => 'image'],
            ['group' => 'social', 'label' => 'LinkedIn Banner', 'key' => 'linkedin-banner', 'value' => 'linkedin-banner.jpg', 'type' => 'image'],
            ['group' => 'social', 'label' => 'Contact Form Script', 'key' => 'contact-form-script', 'value' => '<script>/* contact form */</script>', 'type' => 'textarea'],

            // About Group
            ['group' => 'about', 'label' => 'Company Overview', 'key' => 'company-overview', 'value' => 'Kurnia is a leading provider of ...', 'type' => 'textarea'],
            ['group' => 'about', 'label' => 'Vision', 'key' => 'vision', 'value' => 'To be a world-class company.', 'type' => 'textarea'],
            ['group' => 'about', 'label' => 'Mission', 'key' => 'mission', 'value' => 'Our mission is to deliver ...', 'type' => 'textarea'],
            ['group' => 'about', 'label' => 'CEO Photo', 'key' => 'ceo-photo', 'value' => 'ceo-photo.jpg', 'type' => 'image'],
            ['group' => 'about', 'label' => 'Company Logo', 'key' => 'company-logo', 'value' => 'company-logo.png', 'type' => 'image'],
            ['group' => 'about', 'label' => 'Company History', 'key' => 'company-history', 'value' => 'Founded in 2020 ...', 'type' => 'textarea'],
            ['group' => 'about', 'label' => 'Achievements', 'key' => 'achievements', 'value' => 'Awarded best company in 2022 ...', 'type' => 'textarea'],
            ['group' => 'about', 'label' => 'Team Photo', 'key' => 'team-photo', 'value' => 'team-photo.jpg', 'type' => 'image'],
            ['group' => 'about', 'label' => 'Office Photo', 'key' => 'office-photo', 'value' => 'office-photo.jpg', 'type' => 'image'],
            ['group' => 'about', 'label' => 'Culture Video', 'key' => 'culture-video', 'value' => 'culture-video.mp4', 'type' => 'image'],
        ];

        foreach ($cmsData as $data) {
            Cms::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}
