<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BluethinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AllotSystemController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\AlreadyLoggedIn;
use App\Http\Controllers\DisplayEmployeeController;
use App\Http\Controllers\ViewAllotController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardControllers\myController;

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

// ###################################### New Employee Page routes #####################################
Route::post('/save', [BluethinkController::class, 'saveData'])->name('save');
Route::match(['get', 'post'],'/addemployee', [BluethinkController::class, 'addEmployee'])->middleware('isLoggedIn');

// ###################################### Allot System Page routes #####################################
Route::get('/allotsystem', [AllotSystemController::class, 'allotSystem'])->middleware('isLoggedIn');
Route::match(['get', 'post'],'/allot-check', [AllotSystemController::class, 'checkId'])->name('allot-check');
Route::match(['get', 'post'],'/allot-save', [AllotSystemController::class, 'saveAllotrecord'])->name('allot-save');

// ###################################### Employee Listing Page routes ##################################
Route::get('/viewemployee', [DisplayEmployeeController::class, 'display'])->middleware('isLoggedIn');

// ###################################### Stock System Page routes #############
Route::get('/stock', [stockController::class, 'stock'])->middleware('isLoggedIn');
Route::post('find', [stockController::class, 'emp_detail_find'])->name('find');
Route::post('asset_detail', [stockController::class, 'asset_detail_find'])->name('asset_detail');
Route::match(['get', 'post'],'/allotment', [stockController::class, 'allotment'])->name('allotment');
Route::get('/viewallot', [stockController::class, 'allotDisplay'])->middleware('isLoggedIn');
Route::get('/viewonerecord', [stockController::class, 'viewonerecord'])->middleware('isLoggedIn');






