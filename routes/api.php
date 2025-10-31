<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Course;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/user',[UtilisateurController::class,'index']);
Route::post('/user',[UtilisateurController::class,'store']);
Route::get('/course',[CourseController::class,'index']);
Route::post('/course',[CourseController::class,'store']);
