<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        Notification::create([
            'user_id' => 1, // ID của phụ huynh hoặc gia sư
            'message' => 'Bạn đã nhận được yêu cầu ứng tuyển.',
            'status' => 'unread',
        ]);
    }
}
