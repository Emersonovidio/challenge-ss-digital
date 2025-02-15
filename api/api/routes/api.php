<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get(uri: '/users', action: [UserController::class, 'index']);
Route::post(uri: '/users', action: [UserController::class, 'store']);
