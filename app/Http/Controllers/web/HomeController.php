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
    public function adminDashboard()
    {
        return view('web.admin.dashboard');
    }
    public function adminStudents()
    {
        return view('web.admin.students');
    }
    public function adminStudentDetail()
    {
        return view('web.admin.student_detail');
    }
    public function adminAddStudent()
    {
        return view('web.admin.add_student');
    }
    public function adminAddStudentFamily()
    {
        return view('web.admin.add-student-family');
    }
    public function adminStaff()
    {
        return view('web.admin.staff');
    }
    public function adminAddStaff()
    {
        return view('web.admin.add-staff');
    }
    public function adminStaffDetail()
    {
        return view('web.admin.staff_detail');
    }
    public function adminClasses()
    {
        return view('web.admin.classes');
    }
    public function adminLedger()
    {
        return view('web.admin.ledger');
    }



}
