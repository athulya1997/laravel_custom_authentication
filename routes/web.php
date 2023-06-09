<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
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

Route::get('/','FrontEndController@homePage');
Route::get('reg','FrontEndController@Register');
Route::get('login','FrontEndController@Login');
Route::post('reg-user',[FrontEndController::class,'registerUser'])->name('reg1-user');
Route::post('login-user',[FrontEndController::class,'loginUser'])->name('login1-user');
Route::get('/dashboard',[FrontEndController::class,'dashboard']);
Route::get('/logout',[FrontEndController::class,'logout']);

// Route::get('/', function () {
//     return view('welcome');
// });
