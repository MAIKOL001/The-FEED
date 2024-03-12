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
    
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'home'])->name('dashboard');
 
    Route::post('/store',[App\Http\Controllers\UploadController::class, 'store'])->name('upload.file');
    
Route::get('/upload',[App\Http\Controllers\UploadController::class, 'index']);

Route::get('/account',[App\Http\Controllers\AccountController::class,'index']);

Route::get('/2ndyear', [App\Http\Controllers\DashboardController::class,'showPdfs'])->name('unit.pdfs');

Route::get('/download/{id}', [App\Http\Controllers\FileController::class, 'download'])->name('file.download');

Route::get('/search', [App\Http\Controllers\FileController::class, 'search'])->name('search');

Route::get('/results', [App\Http\Controllers\FileController::class, 'index'])->name('searchresults');

Route::get('/show/{unitCode}', [App\Http\Controllers\FileController::class,'show'])->name('show');

});



