<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'parent_id' => 1, // ID của phụ huynh trong UserSeeder
            'subject' => 'Toán',
            'level' => 'highschool',
            'location' => 'Hà Nội',
            'num_of_students' => 1,
            'gender_preference' => 'any',
            'start_date' => now(),
            'min_rate' => 200000,
            'max_rate' => 300000,
            'description' => 'Cần tìm gia sư dạy Toán lớp 12.',
        ]);
    }
}
