<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/register','register');
Route::post('/auth',[AuthController::class,'Auth_Register']);
Route::view('/login','login');
Route::post('/ss',[AuthController::class,'check']);
Route::view('/home','home')->middleware('isLogged');