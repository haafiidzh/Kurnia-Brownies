<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data user dan role yang akan ditambahkan
        $users = [
            [
                'name' => 'Developer',
                'email' => 'developer@app.com',
                'password' => Hash::make('hapidganteng111'),
                'email_verified_at' => now(),
                'phone' => '081234567890',
                'role' => 'Developer',
            ],
            [
                'name' => 'Admin 1',
                'email' => 'admin@app.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'phone' => '',
                'role' => 'Admin',
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2@kurniabrownies.online',
                'password' => Hash::make('adm.2.KURNIA'),
                'email_verified_at' => now(),
                'phone' => '',
                'role' => 'Admin',
            ],
            [
                'name' => 'Admin 3',
                'email' => 'admin3@kurniabrownies.online',
                'password' => Hash::make('adm.3.KURNIA'),
                'email_verified_at' => now(),
                'phone' => '',
                'role' => 'Admin',
            ],
        ];

        foreach ($users as $userData) {
            // Buat user baru di tabel users
            $user = User::updateOrCreate([
                'id' => Str::random(6),
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'email_verified_at' => $userData['email_verified_at'],
                'phone' => $userData['phone'],
            ]);

            
            // Assign role ke user
            $user->assignRole($userData['role']);
        }
    }
}
