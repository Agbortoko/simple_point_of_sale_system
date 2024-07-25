<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            "page_title" => "Login"
        ];
        return view('auth/login', $data);
    }
}
