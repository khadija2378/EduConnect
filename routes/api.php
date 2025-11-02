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


Route::post('/register',[UtilisateurController::class,'register']);
Route::post('/login',[UtilisateurController::class,'login']);
Route::post('/logout',[UtilisateurController::class,'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum', 'role:teacher')->group(function(){
    
Route::get('/courses',[CourseController::class,'index']);
Route::post('/courses',[CourseController::class,'store']);
Route::put('/courses/{id} ',[CourseController::class,'update']);
Route::delete('/courses/{id} ',[CourseController::class,'destroy']);

});
