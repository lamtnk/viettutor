<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Tạo phụ huynh
        User::create([
            'user_type' => 'parent',
            'name' => 'Phụ huynh 1',
            'email' => 'parent1@example.com',
            'password' => Hash::make('password'),
            'phone' => '0123456789',
            'address' => '123 Main St',
        ]);

        // Tạo gia sư
        User::create([
            'user_type' => 'tutor',
            'name' => 'Gia sư 1',
            'email' => 'tutor1@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987654321',
            'address' => '456 Main St',
        ]);
    }
}
