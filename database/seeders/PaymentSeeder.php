<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        Payment::create([
            'course_id' => 1,
            'student_id' => 1,
            'tutor_id' => 2,
            'amount' => 500000,
            'payment_type' => 'per_course',
            'status' => 'completed',
            'platform_fee' => 50000,
        ]);
    }
}
