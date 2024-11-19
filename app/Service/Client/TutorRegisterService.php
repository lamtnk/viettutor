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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'birth_year' => 'required',
            'address' => 'required',
            'profile_image' => 'required',
            'type' => 'required',
            'specialties' => 'required',
            'live-area' => 'required',
            'teach-area' => 'required',
            'bio' => 'required',
            'identity-card-1' => 'requirerd',
            'identity-card-2' => 'requirerd',
            'certificates' => 'required',
        ])->validate();

        // Upload ảnh đại diện
        $profileImageName = time() . '_' . $data['profile_image']->getClientOriginalName();
        $data['profile_image']->move(public_path('assets_client/img/profile_image'), $profileImageName);

        // Tạo hồ sơ gia sư
        $tutorProfile = TutorProfile::create([
            'user_id' => $userId,
            'bio' => $validatedData['bio'],
            // 'specialties' => json_encode(explode(',', $validatedData['specialties'])),
            'specialties' => $validatedData['specialties'],
            'min_hourly_rate' => 0,
            'max_hourly_rate' => 0,
            'profile_image' => $profileImageName,
            'status' => 0,
            'area' => $validatedData['live-area'],
            'type' => $validatedData['type'],
        ]);

        return $tutorProfile;
    }
}
