<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TutorApplication;

class TutorApplicationSeeder extends Seeder
{
    public function run()
    {
        TutorApplication::create([
            'course_id' => 1, // ID của khóa học trong CourseSeeder
            'tutor_id' => 2, // ID của gia sư trong UserSeeder
            'desired_rate' => 250000,
            'application_status' => 'pending',
        ]);
    }
}
