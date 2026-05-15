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
Route::get('/admin-add-student-family', [HomeController::class, 'adminAddStudentFamily'])->name('admin_add_student_family');
Route::get('/admin-staff', [HomeController::class, 'adminStaff'])->name('admin_staff');
Route::get('/admin-add-staff', [HomeController::class, 'adminAddStaff'])->name('admin_add_staff');
Route::get('/admin-staff-detail', [HomeController::class, 'adminStaffDetail'])->name('admin_staff_detail');
Route::get('/admin-classes', [HomeController::class, 'adminClasses'])->name('admin_classes');
Route::get('/admin-ledger', [HomeController::class, 'adminLedger'])->name('admin_ledger');
