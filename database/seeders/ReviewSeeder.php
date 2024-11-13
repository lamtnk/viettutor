<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        Review::create([
            'course_id' => 1,
            'student_id' => 1, // ID học sinh hoặc phụ huynh
            'tutor_id' => 2,
            'rating' => 4.5,
            'comment' => 'Gia sư dạy tốt và nhiệt tình.',
        ]);
    }
}
