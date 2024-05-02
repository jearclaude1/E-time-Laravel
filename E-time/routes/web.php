<?php

use App\Models\userContraller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Models\classroom;

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
// user activate 
Route::post('/user',[userController::class,'store'])->name('user.store');
route::get('user/user_page',[userController::class,'user_page'])->name('user.create');
route::get('user_page/{id}/destroy',[userController::class,'destroy']);
route::get('user_page/{id}/update',[userController::class,'update']);
route::get('/update/{id}/update',[userController::class,'updated']);

// period activate 
Route::post('/period',[PeriodController::class,'store'])->name('period.store');
Route::get('/period/period',[PeriodController::class,'period_page']);


// class
Route::post('/class',[ClassroomController::class,'store'])->name('class.store');
Route::get('/class/class_page',[ClassroomController::class,'Class'])->name('class.create');
route::get('class/{id}/destroy',[ClassroomController::class,'destroy']);


// course
Route::post('/course',[CourseController::class,'store'])->name('course.store');
Route::get('/course/course_page',[CourseController::class,'Course'])->name('course.create');
route::get('/course/{id}/destroy',[CourseController::class,'destroy']);


?>