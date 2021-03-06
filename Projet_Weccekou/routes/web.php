<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/home','HomeController@home');

Route::get("home",[HomeController::class,'index']);
Route::get("registration",[HomeController::class,'Registration']);
Route::post("save_registration",[RegistrationController::class,'save_registration']);
