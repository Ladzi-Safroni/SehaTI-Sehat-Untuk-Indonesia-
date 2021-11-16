<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/approve/{id}', [AdminController::class, 'approve']);

Route::get('/user', [PengajuanController::class, 'index']);
Route::get('/pengajuan/detail/{id}', [PengajuanController::class, 'show']);
Route::get('/pengajuan', [PengajuanController::class, 'create']);
Route::post('/pengajuan', [PengajuanController::class, 'store']);

Route::get('/pengumuman', [ApproveController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');