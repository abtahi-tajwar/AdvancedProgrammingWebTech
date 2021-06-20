<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    echo "Test request";
    //return view('welcome');
});


Route::get('/login', [LoginController::class, 'index']);
//Route::get('/login', [LoginController::class,'index']); for v8
Route::post('/login', [LoginController::class, 'verify']);
Route::get('/logout', [LogoutController::class, 'index']);

Route::group(['middleware'=>['sess']], function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home.index')->middleware('sess');
    //Route::get('/home', 'HomeController@index')->name('home.index');

    Route::get('/user/list', [UserController::class, 'list'])->name('user.list');
    Route::get('/user/details/{id}', 'UserController@details');

    Route::group(['middleware'=>['type']], function(){
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/create', [UserController::class, 'insert'])->name('user.insert');
        Route::get('/user/edit/{id}', [UserController::class, 'edit']);
        Route::post('/user/edit/{id}', [UserController::class, 'update']);
        Route::get('/user/delete/{id}', [UserController::class, 'delete']);
        Route::post('/user/delete/{id}', [UserController::class, 'destroy']);
    });
    
});

Route::resource('/product', 'ProductController');