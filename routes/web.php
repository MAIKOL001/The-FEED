<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home_2', [App\Http\Controllers\Home_2Controller::class, 'index'])->name('home2');

Route::get('/1styear',[App\Http\Controllers\CoursesController::class, 'index']);

Route::get('/2ndyear',[App\Http\Controllers\CoursesController::class, 'second']);

Route::get('/3rdyear',[App\Http\Controllers\CoursesController::class, 'third']);

Route::get('/4thyear',[App\Http\Controllers\CoursesController::class, 'fourth']);

Route::post('/store',[App\Http\Controllers\HomeController::class, 'store'])->name('upload.file');