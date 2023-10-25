<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PenggunapcController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('throttle:login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

//USER
Route::get('/user', [UserController::class,'index'])->name('user');
Route::get('/create-user', [UserController::class,'create'])->name('create');
Route::post('/store-user', [UserController::class,'store'])->name('store');
Route::get('/delte-user/{id}', [UserController::class,'destroy'])->name('destroy');

//LAB
Route::get('/lab', [LabController::class, 'index'])->name('lab');
Route::post('/store-lab', [LabController::class, 'store'])->name('storelab');
Route::post('/update-lab/{id}', [LabController::class, 'update'])->name('updatelab');
Route::get('/delete-lab/{id}', [LabController::class, 'destroy'])->name('destroylab');

//KOMPUTER
Route::get('/komputer', [KomputerController::class,'index'])->name('komputer');
Route::post('/komputer', [KomputerController::class,'store'])->name('storekomputer');
Route::post('/komputer/{id}', [KomputerController::class,'update'])->name('updatekomputer');
Route::get('/komputer/{id}', [KomputerController::class,'destroy'])->name('destroykomputer');

//PENGGUNA PC
Route::get('/penggunapc',[PenggunapcController::class,'index'])->name('penggunapc');
Route::post('/penggunapc',[PenggunapcController::class,'store'])->name('storepenggunapc');
Route::post('/penggunapc/{id}',[PenggunapcController::class,'update'])->name('updatepenggunapc');
Route::get('/penggunapc/{id}',[PenggunapcController::class,'destroy'])->name('destroypenggunapc');
