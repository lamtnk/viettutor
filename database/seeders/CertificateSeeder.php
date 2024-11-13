<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    public function run()
    {
        Certificate::create([
            'tutor_profile_id' => 1, // ID của tutor_profile mà bạn muốn liên kết
            'title' => 'Bằng Cử nhân Sư phạm Toán',
            'image' => 'path/to/image1.jpg',
            'issued_date' => '2015-06-01',
            'description' => 'Bằng cử nhân được cấp bởi Đại học Giáo dục',
        ]);

        Certificate::create([
            'tutor_profile_id' => 1,
            'title' => 'IELTS 7.5',
            'image' => 'path/to/image2.jpg',
            'issued_date' => '2020-09-15',
            'description' => 'Chứng chỉ IELTS với điểm số 7.5',
        ]);
    }
}
