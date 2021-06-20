<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'verify']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/logout', [LogoutController::class,'index']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/create', [UserController::class,'insert']);
Route::get('/user/list', [UserController::class,'list']);
Route::get('/user/details/{id}', [UserController::class,'details']);
Route::get('/user/edit/{id}', [UserController::class,'edit']);
Route::post('/user/edit/{id}', [UserController::class,'update']);
Route::get('/user/delete/{id}', [UserController::class,'delete']);
Route::post('/user/delete/{id}', [UserController::class,'destroy']);



Route::resource('product', ProductController::class);
