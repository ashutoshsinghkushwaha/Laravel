<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\AlreadyLoggedIn;
use App\Http\Controllers\BluethinkController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockviewController;

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
Route::view('first','first');
// ###################################### Dashboard routes ########################################
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/', [UserController::class, 'dashboard'])->middleware('isLoggedIn');

// ###################################### Login/Logout routes #####################################
Route::get('/login', [UserController::class, 'login'])->middleware('alreadyloggedin');
Route::get('/register', [UserController::class, 'register'])->middleware('alreadyloggedin');
Route::match(['get', 'post'], '/register-user', [UserController::class,'registerUser'])->name('register-user');
Route::match(['get', 'post'], '/login-user', [UserController::class,'loginUser'])->name('login-user');
Route::get('/logout', [UserController::class, 'logout']);

// ###################################### Employee Add/view Page routes #####################################
Route::match(['get', 'post'],'/addemployee', [BluethinkController::class, 'addEmployee'])->middleware('isLoggedIn');
Route::post('/save', [BluethinkController::class, 'saveData'])->name('save');
Route::get('/viewemployee', [BluethinkController::class, 'display'])->middleware('isLoggedIn');

// ###################################### Stock Create Page routes #############
Route::get('/stock', [StockController::class, 'stock'])->middleware('isLoggedIn');
Route::post('find', [StockController::class, 'emp_detail_find'])->name('find');
Route::post('asset_detail', [StockController::class, 'asset_detail_find'])->name('asset_detail');
Route::match(['get', 'post'],'/SaveSystemRecord', [StockController::class, 'SaveSystemRecord'])->name('SaveSystemRecord');

// ###################################### Stock View Page routes #############
Route::get('/viewallot', [StockviewController::class, 'viewallot'])->middleware('isLoggedIn');
Route::get('/viewonerecord', [StockviewController::class, 'viewonerecord'])->middleware('isLoggedIn');
