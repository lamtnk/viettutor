<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Admin\TutorService;
use App\Service\Client\TutorTableService;
use Illuminate\Http\Request;

class TutorTableController extends Controller
{
    protected $tutorTableService;
    public function __construct(TutorTableService $tutorTableService) {
        $this->tutorTableService = $tutorTableService;
    }

    public function index() {
        $listTutor = $this->tutorTableService->getFullProfile();
        return view('client.tblTutor.tutor', compact('listTutor'));
    }
}
