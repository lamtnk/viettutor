<?php

namespace App\Service\Client;

use App\Models\TutorProfile;

class HomeService
{
    public function getAll()
    {
        return TutorProfile::with('user')->get();
    }
}
