<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;
use App\Http\Controllers\Api\AuthController;

//public routes
// Route::get('/student',[StudentController::class, 'index']);

// Route::middleware('auth:sanctum')->get('/user',function(Request $request) => {
//     return $request->user();
// });

Route::post('/signup',[AuthController::class,'signup']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout']);