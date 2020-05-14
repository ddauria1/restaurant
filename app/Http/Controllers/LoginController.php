<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller{

    public function login(){
        return view('admin.login',['title'=>"Login Page 1"]);
    }
}
