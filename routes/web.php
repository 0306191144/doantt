<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController\LoginController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\GiaovienController;
use App\Http\Controllers\PhongmayController;
use App\Http\Controllers\LophocController;
use App\Http\Controllers\NhomkiemkeController;
use App\Http\Controllers\CahocController;
use App\Http\Controllers\MaytinhController;
use App\Http\Controllers\LoiController;







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
    Route::prefix('phongmay')->group(function () {
        Route::get('/create', [PhongmayController::class, 'create'])->name('Phongmay.create');
        Route::post('/store', [PhongmayController::class, 'store'])->name('Phongmay.store');
        Route::get('/index', [PhongmayController::class, 'index'])->name('Phongmay.index');
        Route::get('/edit/{id}', [PhongmayController::class, 'edit'])->name('Phongmay.edit');
        Route::post('/update/{id}', [PhongmayController::class, 'update'])->name('Phongmay.update');
        Route::get('/delete/{id}', [PhongmayController::class, 'delete'])->name('Phongmay.delete');
    });
    Route::prefix('users')->group(function () {
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/index', [UserController::class, 'index'])->name('user.index');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });
    Route::prefix('lophoc')->group(function () {
        Route::get('/create', [LophocController::class, 'create'])->name('Lophoc.create');
        Route::post('/store', [LophocController::class, 'store'])->name('Lophoc.store');
        Route::get('/index', [LophocController::class, 'index'])->name('Lophoc.index');
        Route::get('/edit/{id}', [LophocController::class, 'edit'])->name('Lophoc.edit');
        Route::post('/update/{id}', [LophocController::class, 'update'])->name('Lophoc.update');
        Route::get('/delete/{id}', [LophocController::class, 'delete'])->name('Lophoc.delete');
    });
    Route::prefix('nhomkiemke')->group(function () {
        Route::get('/create', [NhomkiemkeController::class, 'create'])->name('Nhomkiemke.create');
        Route::post('/store', [NhomkiemkeController::class, 'store'])->name('Nhomkiemke.store');
        Route::get('/index', [NhomkiemkeController::class, 'index'])->name('Nhomkiemke.index');
        Route::get('/edit/{id}', [NhomkiemkeController::class, 'edit'])->name('Nhomkiemke.edit');
        Route::post('/update/{id}', [NhomkiemkeController::class, 'update'])->name('Nhomkiemke.update');
        Route::get('/delete/{id}', [NhomkiemkeController::class, 'delete'])->name('Nhomkiemke.delete');
    });
    Route::prefix('maytinh')->group(function () {
        Route::get('/create', [MaytinhController::class, 'create'])->name('Maytinh.create');
        Route::post('/store', [MaytinhController::class, 'store'])->name('Maytinh.store');
        Route::get('/index', [MaytinhController::class, 'index'])->name('Maytinh.index');
        Route::get('/edit/{id}', [MaytinhController::class, 'edit'])->name('Maytinh.edit');
        Route::post('/update/{id}', [MaytinhController::class, 'update'])->name('Maytinh.update');
        Route::get('/delete/{id}', [MaytinhController::class, 'delete'])->name('Maytinh.delete');
    });
    Route::prefix('cahoc')->group(function () {
        Route::get('/create', [CahocController::class, 'create'])->name('Cahoc.create');
        Route::post('/store', [CahocController::class, 'store'])->name('Cahoc.store');
        Route::get('/index', [CahocController::class, 'index'])->name('Cahoc.index');
        Route::get('/edit/{id}', [CahocController::class, 'edit'])->name('Cahoc.edit');
        Route::post('/update/{id}', [CahocController::class, 'update'])->name('Cahoc.update');
        Route::get('/delete/{id}', [CahocController::class, 'delete'])->name('Cahoc.delete');
    });
    Route::prefix('maytinh')->group(function () {
        Route::get('/create', [MaytinhController::class, 'create'])->name('Maytinh.create');
        Route::post('/store', [MaytinhController::class, 'store'])->name('Maytinh.store');
        Route::get('/index', [MaytinhController::class, 'index'])->name('Maytinh.index');
        Route::get('/edit/{id}', [MaytinhController::class, 'edit'])->name('Maytinh.edit');
        Route::post('/update/{id}', [MaytinhController::class, 'update'])->name('Maytinh.update');
        Route::get('/delete/{id}', [MaytinhController::class, 'delete'])->name('Maytinh.delete');
    });
    Route::prefix('loi')->group(function () {
        Route::get('/create', [LoiController::class, 'create'])->name('Loi.create');
        Route::post('/store', [LoiController::class, 'store'])->name('Loi.store');
        Route::get('/index', [LoiController::class, 'index'])->name('Loi.index');
        Route::get('/edit/{id}', [LoiController::class, 'edit'])->name('Loi.edit');
        Route::post('/update/{id}', [LoiController::class, 'update'])->name('Loi.update');
        Route::get('/delete/{id}', [LoiController::class, 'delete'])->name('Loi.delete');
    });
});