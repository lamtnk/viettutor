<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Khóa học 1
        Course::create([
            'parent_id' => 1,
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

        // Khóa học 2
        Course::create([
            'parent_id' => 2,
            'subject' => 'Tiếng Anh',
            'level' => 'elementary',
            'location' => 'TP. Hồ Chí Minh',
            'num_of_students' => 2,
            'gender_preference' => 'female',
            'start_date' => now()->addDays(7),
            'min_rate' => 150000,
            'max_rate' => 250000,
            'description' => 'Tìm gia sư nữ dạy Tiếng Anh cho 2 bé lớp 3.',
        ]);

        // Khóa học 3
        Course::create([
            'parent_id' => 3,
            'subject' => 'Lập trình Python',
            'level' => 'college',
            'location' => 'Đà Nẵng',
            'num_of_students' => 1,
            'gender_preference' => 'any',
            'start_date' => now()->addDays(14),
            'min_rate' => 300000,
            'max_rate' => 400000,
            'description' => 'Cần gia sư có kinh nghiệm lập trình Python cho sinh viên năm 2.',
        ]);

        // Khóa học 4
        Course::create([
            'parent_id' => 4,
            'subject' => 'Hóa học',
            'level' => 'highschool',
            'location' => 'Cần Thơ',
            'num_of_students' => 1,
            'gender_preference' => 'male',
            'start_date' => now()->addDays(5),
            'min_rate' => 250000,
            'max_rate' => 350000,
            'description' => 'Cần tìm gia sư nam dạy Hóa lớp 11, chuẩn bị thi học sinh giỏi.',
        ]);

        // Khóa học 5
        Course::create([
            'parent_id' => 5,
            'subject' => 'Ngữ văn',
            'level' => 'elementary',
            'location' => 'Hải Phòng',
            'num_of_students' => 3,
            'gender_preference' => 'any',
            'start_date' => now()->addDays(10),
            'min_rate' => 200000,
            'max_rate' => 300000,
            'description' => 'Tìm gia sư dạy Ngữ văn cho nhóm 3 học sinh lớp 9.',
        ]);

        // Khóa học 6
        Course::create([
            'parent_id' => 6,
            'subject' => 'Vật lý',
            'level' => 'elementary',
            'location' => 'Hà Nội',
            'num_of_students' => 1,
            'gender_preference' => 'any',
            'start_date' => now()->addDays(3),
            'min_rate' => 220000,
            'max_rate' => 330000,
            'description' => 'Cần gia sư dạy Vật lý lớp 10, tập trung vào bài tập nâng cao.',
        ]);

        // Khóa học 7
        Course::create([
            'parent_id' => 7,
            'subject' => 'Đàn piano',
            'level' => 'other',
            'location' => 'Nha Trang',
            'num_of_students' => 1,
            'gender_preference' => 'female',
            'start_date' => now()->addDays(7),
            'min_rate' => 250000,
            'max_rate' => 350000,
            'description' => 'Tìm gia sư nữ dạy đàn piano cơ bản cho bé gái 7 tuổi.',
        ]);
    }
}
