<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    public function run()
    {
        Report::create([
            'reported_by' => 1, // ID người dùng báo cáo
            'course_id' => 1,
            'description' => 'Gia sư thường xuyên đi muộn.',
            'status' => 'pending',
        ]);
    }
}
