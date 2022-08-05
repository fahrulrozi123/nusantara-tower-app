<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\TenantController;

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
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/tambahuser', [LoginController::class, 'tambahuser'])->name('tambahuser');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/data', [UnitController::class, 'index'])->name('data')->middleware('auth');
Route::post('/tambahdata', [UnitController::class, 'tambahdata'])->name('tambahdata');
Route::get('/tampildata/{id}', [UnitController::class, 'tampildata'])->name('tampildata');
Route::post('/update/{id}', [UnitController::class, 'update'])->name('update');
Route::get('/deleteunit/{id}', [UnitController::class, 'deleteunit'])->name('deleteunit');

Route::get('/datauser', [DatauserController::class, 'index'])->name('datauser')->middleware('auth');
Route::post('/tambahdatauser', [DatauserController::class, 'tambahdatauser'])->name('tambahdatauser');
Route::get('/tampildatauser/{id}', [DatauserController::class, 'tampildatauser'])->name('tampildatauser');
Route::post('/updateuser/{id}', [DatauserController::class, 'updateuser'])->name('updateuser');
Route::get('/deleteuser/{id}', [DatauserController::class, 'deleteuser'])->name('deleteuser');

Route::get('/datatenant', [TenantController::class, 'index'])->name('datatenant')->middleware('auth');
Route::post('/tambahdatatenant', [TenantController::class, 'tambahdatatenant'])->name('tambahdatatenant');
Route::get('/tampildatatenant/{id}', [TenantController::class, 'tampildatatenant'])->name('tampildatatenant');
Route::post('/updatetenant/{id}', [TenantController::class, 'updatetenant'])->name('updatetenant');
Route::get('/deletetenant/{id}', [TenantController::class, 'deletetenant'])->name('deletetenant');
