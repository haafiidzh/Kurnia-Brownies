<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 111; $i++) {
            Visitor::create([
                'ip_address' => '192.168.1.' . rand(1, 255),
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'referer' => 'https://example.com',
                'created_at' => Carbon::create(2025, 1, 12, rand(0, 23), rand(0, 59), rand(0, 59)),
                'updated_at' => now(),
            ]);
        }
    }
}
