<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\TutorService;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    protected $tutorService;
    public function __construct(TutorService $tutorService) {
        $this->tutorService = $tutorService;
    }

    public function index() {
        $listTutor = $this->tutorService->getAll();
        return view('admin.tutor.index', compact('listTutor'));
    }
}
