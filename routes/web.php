<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AiController;

/*A
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/get-chat',[AiController::class,"ask"])->name("get_chat");
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

Route::delete('/files/{file}', [App\Http\Controllers\FileController::class,'destroy'])->name('files.destroy');

Route::get('/ai', [App\Http\Controllers\AiController::class,'View'])->name('view');

Route::get('/ar', [App\Http\Controllers\ArController::class,'index'])->name('view');




});



