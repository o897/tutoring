<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/my-learning',[StudentController::class,'myLearning']);
Route::get('/student/mathematics',[StudentController::class,'mathematics']);
Route::get('/student/profile',[StudentControlller::class,'profile']);

Route::get('/profile',[HomeController::class,'profile']);
Route::resource('student',StudentController::class);


Route::get('/admin/resources',[AdminController::class,'resources']);
Route::get('/admin/assignments',[AdminController::class,'assignments']);
Route::get('/admin/student',[AdminController::class,'student']);
Route::get('/admin/students/financial-details', [AdminController::class,'finance']);
Route::get('/admin/registration',[AdminController::class,'registration']);
Route::get('/admin/upload',[AdminController::class,'upload']);
Route::get('/admin/tutory',[AdminController::class,'tutory']);
Route::get('admin',[AdminController::class,'index']);