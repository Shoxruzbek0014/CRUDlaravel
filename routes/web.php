<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/contact', CrudController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('student', [StudentController::class,'index']);
Route::get('add-student', [StudentController::class,'create']);
Route::post('add-student', [StudentController::class, 'store']);

Route::get('student/show/{id}', [StudentController::class, 'show']);
Route::get('student/edit/{id}', [StudentController::class, 'edit']);

Route::post('student-update/{id}', [StudentController::class, 'student_update']);