<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;




Route::get('/', function () {
    return view('dashboard');
}) ->middleware(['auth'])->name('dashboard'); 

Route::resource('doctors', DoctorController::class);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('employees', EmployeeController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

