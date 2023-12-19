<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

//home
Route::get('/', [SiteController::class,'home'])->name('home');

//event
Route::get('/event', [EventController::class, 'event']);
Route::get('/event/create', [EventController::class, 'create']);
Route::post('/event/create', [EventController::class,'store']);
Route::get('/event/{event}', [EventController::class,'edit']);
Route::put('event/{event}', [EventController::class,'update']);
Route::delete('event/{event}', [EventController::class,'delete']);

//student
Route::get('/student', [StudentController::class,'student']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class,'store']);
Route::get('/student/{student}', [StudentController::class,'edit']);
Route::put('student/{student}', [StudentController::class,'update']);
Route::delete('student/{student}', [StudentController::class,'delete']);

//attendance
Route::get('/attendance', [AttendanceController::class,'attendance']);
Route::get('/attendance/create', [AttendanceController::class,'create']);
Route::post('/attendance/create', [AttendanceController::class,'store']);
Route::get('/attendance/{attendance}', [AttendanceController::class,'edit']);
Route::put('attendance/{attendance}', [AttendanceController::class,'update']);
Route::delete('/attendance/{attendance}', [AttendanceController::class,'delete']);
