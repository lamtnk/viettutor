<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeachingHistory;

class TeachingHistorySeeder extends Seeder
{
    public function run()
    {
        TeachingHistory::create([
            'course_id' => 1,
            'tutor_id' => 2, // ID của gia sư trong UserSeeder
            'student_id' => 1, // ID của học sinh hoặc phụ huynh trong UserSeeder
            'date' => now()->addDays(1),
            'start_time' => '14:00:00',
            'end_time' => '16:00:00',
            'status' => 'completed',
            'feedback' => 'Buổi học tốt, học sinh tiếp thu nhanh.',
        ]);
    }
}
