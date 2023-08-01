<?php

use App\Http\Controllers\demoController;
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

//Route::get('/hello/{name}/{age}',[demoController::class,'demoAction']);
//Route::post('/hellow',[demoController::class,'demoAction']);
Route::get('/headerCon',[demoController::class,'demoAction']);
