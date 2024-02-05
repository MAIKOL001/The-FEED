<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/pdfs', [App\Http\Controllers\APIController::class, 'firstPDFs']);

Route::get('/pdfs2', [App\Http\Controllers\APIController::class, 'secondPDFs']);

Route::get('/pdfs3', [App\Http\Controllers\APIController::class, 'thirdPDFs']);

Route::get('/pdfs4', [App\Http\Controllers\APIController::class, 'fourthPDFs']);







