<?php

namespace App\Service\Client;

use App\Models\TutorProfile;
use App\Models\User;

class ListTutorService
{

    public function getAll() {
        return TutorProfile::all();
    }
    public function getFullProfile() {
        $tutors = TutorProfile::whereHas('user', function($query) {
            $query->where('user_type', 'tutor');
        })->get();
        foreach ($tutors as $key => $item) {
            // Làm tròn số 
            $tutors[$key]['roundedValue'] = $this->customRound($tutors[$key]['average_rating']);
            // Tính sao đầy
            $tutors[$key]['filledStars'] = floor($tutors[$key]['roundedValue']);
            // Tính sao nửa
            $tutors[$key]['hasHalfStar'] = ($tutors[$key]['roundedValue'] - $tutors[$key]['filledStars']) == 0.5;
            // Tính sao trống
            $tutors[$key]['emptyStars'] = 5 - $tutors[$key]['filledStars'] - ($tutors[$key]['hasHalfStar'] ? 1 : 0);
        }
        return $tutors;
    }
    private function customRound($number) {
        $decimal = $number - intval($number);
        if ($decimal >= 0.8) {
            return intval($number) + 1;
        } elseif ($decimal >= 0.3) {
            return intval($number) + 0.5;
        } else {
            return intval($number);
        }
    }
    
}
