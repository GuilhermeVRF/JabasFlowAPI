<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Auth\UserService;

class UserController extends Controller{
    private $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function index(){
        return $this->userService->index();
    }

    public function verifyEmail(){
        return $this->userService->verifyEmail();
    }

    public function store(Request $request){
        return $this->userService->store($request);
    }
}
