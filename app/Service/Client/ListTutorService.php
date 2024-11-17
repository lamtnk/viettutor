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
        $tutors= TutorProfile::with('user')->get();
        return $tutors;
    }
}
