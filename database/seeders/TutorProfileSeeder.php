<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TutorProfile;
use App\Models\User;

class TutorProfileSeeder extends Seeder
{
    public function run()
    {
        // Giả sử ID 2 là gia sư
        TutorProfile::create([
            'user_id' => 2, // ID của gia sư trong UserSeeder
            'bio' => 'Kinh nghiệm 5 năm giảng dạy Toán và Lý.',
            'experience_years' => 5,
            'specialties' => 'Toán, Lý',
            'certificates' => 'Bằng cử nhân Sư phạm Toán',
            'average_rating' => 4.5,
            'total_hours_taught' => 120,
            'min_hourly_rate' => 200000,
            'max_hourly_rate' => 400000,
            'profile_image' => 'path/to/image.jpg',
        ]);
        TutorProfile::create([
            'user_id' => 3, // ID của gia sư trong UserSeeder
            'bio' => 'Kinh nghiệm 6 năm giảng dạy Toán và Lý.',
            'experience_years' => 5,
            'specialties' => 'Toán, Lý, Văn',
            'certificates' => 'Bằng cử nhân Sư phạm Anh',
            'average_rating' => 4.5,
            'total_hours_taught' => 120,
            'min_hourly_rate' => 200000,
            'max_hourly_rate' => 400000,
            'profile_image' => 'path/to/image.jpg',
        ]);
    }
}
