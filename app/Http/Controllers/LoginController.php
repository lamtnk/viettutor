<?php

namespace App\Http\Controllers;

use App\Service\Client\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $loginService;

    public function __construct(LoginService $loginService){
        $this->loginService = $loginService;
    }
    public function index(){
       return $this->loginService->index();
    }
    public function login(Request $request){
       return $this->loginService->login($request);
    }
}
