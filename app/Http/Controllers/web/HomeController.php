<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
     public function price()
    {
        return view('web.price');
    }
    public function login()
    {
        return view('web.auth.login');
    }
    public function signUp()
    {
        return view('web.auth.signup');
    }
    public function schoolProfile()
    {
        return view('web.auth.school_profile');
    }
    public function forgotPassword()
    {
        return view('web.auth.forgot_password');
    }
    public function resetPassword()
    {
        return view('web.auth.reset_password');
    }
    public function schoolDashboard()
    {
        return view('web.school.dashboard');
    }


}
