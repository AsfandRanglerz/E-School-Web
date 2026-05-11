<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/price', [HomeController::class, 'price']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/signup', [HomeController::class, 'signUp']);
Route::get('/school-profile', [HomeController::class, 'schoolProfile']);
Route::get('/forgot-password', [HomeController::class, 'forgotPassword']);
Route::get('/reset-password', [HomeController::class, 'resetPassword']);
Route::get('/school-dashboard', [HomeController::class, 'schoolDashboard']);
Route::get('/admin-dashboard', [HomeController::class, 'adminDashboard'])->name('admin_dashboard');
Route::get('/admin-students', [HomeController::class, 'adminStudents'])->name('admin_students');
Route::get('/admin-student-detail', [HomeController::class, 'adminStudentDetail'])->name('admin_student_detail');
Route::get('/admin-add-student', [HomeController::class, 'adminAddStudent'])->name('admin_add_student');
