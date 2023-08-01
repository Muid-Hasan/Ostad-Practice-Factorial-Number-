<?php

use App\Http\Controllers\demoController;
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

//Route::get('/hello/{name}/{age}',[demoController::class,'demoAction']);
//Route::get('/hello1',[demoController::class,'demoAction1']);
//Route::get('/hello2',[demoController::class,'demoAction2']);

Route::get('/headerCon/{num1}/{num2}',[demoController::class,'demoAction']);
