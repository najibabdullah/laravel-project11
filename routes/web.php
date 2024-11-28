<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentAdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GradeAdminController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class,'index']);

Route::get('/students', [StudentController::class,'index']);

Route::get('/grades', [GradeController::class,'index']);

Route::get('/department', [DepartmentController::class,'index']);

Route::get('/department-admin', [DepartmentAdminController::class,'index']);

Route::get('/student-admin', [StudentAdminController::class,'index']);

Route::get('/grade-admin', [GradeAdminController::class,'index']);

Route::get('/dashboard', [DashboardController::class,'index']);



