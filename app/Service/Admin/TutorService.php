<?php

namespace App\Service\Admin;

use App\Models\TutorProfile;

class TutorService
{
    public function getAll() {
        return TutorProfile::all();
    }
}
