<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController\LoginController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\GiaovienController;

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


Route::get('/dangnhap', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('Admin.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('Admin/Home', function () {
        return view('Admin.Home');
    })->name('Admin.Home');

    Route::prefix('giaovien')->group(function () {
        Route::get('/create', [GiaovienController::class, 'create'])->name('Giaovien.create');
        Route::post('/store', [GiaovienController::class, 'store'])->name('Giaovien.store');
        Route::get('/index', [GiaovienController::class, 'index'])->name('Giaovien.index');
        Route::get('/edit/{id}', [GiaovienController::class, 'edit'])->name('Giaovien.edit');
        Route::post('/update/{id}', [GiaovienController::class, 'update'])->name('Giaovien.update');
        Route::get('/delete/{id}', [GiaovienController::class, 'delete'])->name('Giaovien.delete');
    });
    Route::prefix('users')->group(function () {
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/index', [UserController::class, 'index'])->name('user.index');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });
});
