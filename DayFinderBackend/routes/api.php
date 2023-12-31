<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DateController;


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

//dates
Route::post('/persist{id}', [DateController::class, 'persist']);
Route::get('/findAll{id}', [DateController::class, 'findAll']);

//user
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
