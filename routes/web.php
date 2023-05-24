<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
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
    return view('course.index');
});

Route::resource('courses', CourseController::class);
Route::resource('lessons', LessonController::class);
Route::get('courses/{course}/lessons', [CourseController::class, 'getLessons'])->name('getLessons');
Route::get('courses/{course}/lessons/create', [LessonController::class, 'create'])->name('createLesson');
Route::post('courses/{course}/lessons', [LessonController::class, 'store'])->name('storeLesson');