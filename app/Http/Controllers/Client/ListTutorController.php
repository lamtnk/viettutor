<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Admin\TutorService;
use App\Service\Client\ListTutorService;
use Illuminate\Http\Request;

class ListTutorController extends Controller
{
    protected $listTutorService;
    public function __construct(ListTutorService $listTutorService) {
        $this->listTutorService = $listTutorService;
    }

    public function index() {
        $listTutor = $this->listTutorService->getFullProfile();
        return view('client.ListTutor.list-tutor', compact('listTutor'));
    }
}
