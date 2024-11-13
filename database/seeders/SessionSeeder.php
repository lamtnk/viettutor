<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;

class SessionSeeder extends Seeder
{
    public function run()
    {
        Session::create([
            'course_id' => 1, // ID của khóa học trong CourseSeeder
            'date' => now()->addDays(1),
            'start_time' => '14:00:00',
            'end_time' => '16:00:00',
            'status' => 'pending',
            'feedback' => null,
        ]);
    }
}
