<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

//profile
Route::get('/profile', [UserController::class, 'index']);
Route::get('/profile/{id}', [UserController::class, 'show']);
Route::post('/create-profile', [UserController::class, 'store']);
Route::put('/update-profile/{id}', [UserController::class, 'update']);
Route::delete('/delete-profile/{id}', [UserController::class, 'destroy']);