<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::get('/', [AuthController::class, 'userlogin']);

//database user
Route::get('/userlogin', [AuthController::class, 'userlogin'])->name('login');
Route::post('/postloginuser', [AuthController::class, 'postloginuser']);
Route::post('/logoutuser', [AuthController::class, 'logoutuser']);

Route::get('/registeruser', [UserController::class, 'registeruser']);
Route::post('/register', [UserController::class, 'register']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/index', [UserController::class, 'index']);
    Route::get('/history', [UserController::class, 'history']);
    Route::get('/test', [UserController::class, 'test']);
    Route::post('/addtsk', [UserController::class, 'addtsk']);
});


Route::get('/adminlogin', [AuthController::class, 'adminlogin'])->name('login');
Route::post('/postloginadmin', [AuthController::class, 'postloginadmin']);
Route::post('/logoutadmin', [AuthController::class, 'logoutadmin']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/database', [AdminController::class, 'index']);
    Route::get('/upstat/{id}/', [AdminController::class, 'updatestatus']);
    Route::get('/delstat/{id}/', [AdminController::class, 'deletestatus']);
    Route::post('/add', [AdminController::class, 'add']);
});
