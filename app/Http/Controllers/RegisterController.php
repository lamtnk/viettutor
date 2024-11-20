<?php

namespace App\Http\Controllers;

use App\Service\Client\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private $registerService;
    public function __construct(RegisterService $registerService) {
        $this->registerService = $registerService;
    }
    public function index() {
       return $this->registerService->index();
    }
    public function register(Request $request) {
        return $this->registerService->register($request);
    }
} 
