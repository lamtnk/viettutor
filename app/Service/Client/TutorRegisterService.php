<?php

namespace App\Service\Client;

use App\Models\User;
use App\Models\TutorProfile;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class TutorRegisterService
{
    public function getUser()
    {
        return User::find(1); // Lấy người dùng mẫu
    }

    public function getProvinces()
    {
        return \Kjmtrue\VietnamZone\Models\Province::all();
    }

    public function getDistricts($province_id)
    {
        return \Kjmtrue\VietnamZone\Models\District::where('province_id', $province_id)->get();
    }

    public function register(array $data, $userId)
    {
        // Validate dữ liệu
        $validatedData = validator($data, [
            // 'name' => 'required|string|max:255',
            // 'phone' => 'required|string|max:20',
            // 'email' => 'required|email|max:255',
            // 'gender' => 'required|string',
            // 'birth_year' => 'required|numeric|min:1900|max:' . now()->year,
            // 'address' => 'required|string|max:255',
            'profile_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'type' => 'required|integer',
            'bio' => 'required|string|max:1500',
            'specialties' => 'required|string|max:255',
            'certificates.*' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'live-area' => 'required|integer',
        ])->validate();

        // Upload ảnh đại diện
        $profileImagePath = $data['profile_image']->store('public/assets_client/img', 'public');

        // Tạo hồ sơ gia sư
        $tutorProfile = TutorProfile::create([
            'user_id' => $userId,
            'bio' => $validatedData['bio'],
            // 'specialties' => json_encode(explode(',', $validatedData['specialties'])),
            'specialties' => $validatedData['specialties'],
            'min_hourly_rate' => 0,
            'max_hourly_rate' => 0,
            'profile_image' => $profileImagePath,
            'status' => 1,
            'area' => $validatedData['live-area'],
            'type' => $validatedData['type'],
        ]);

        // Lưu các chứng chỉ
        if (isset($data['certificates']) && is_array($data['certificates'])) {
            foreach ($data['certificates'] as $certificateFile) {
                $certificatePath = $certificateFile->store('tutor_certificates', 'public');
                Certificate::create([
                    'tutor_profile_id' => $tutorProfile->id,
                    'title' => 'Certificate',
                    'image' => $certificatePath,
                    'issued_date' => now(),
                    'description' => '',
                ]);
            }
        }

        return $tutorProfile;
    }
}
