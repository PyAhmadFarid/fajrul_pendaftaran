<?php

use App\Http\Controllers\adminVerifikasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dataPesertaController;
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
    //dd(auth()->user());
    return view('home');
})->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'registerView'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
});

Route::group(['middleware' => 'role:user'], function () {
    Route::get('/data_peserta',[dataPesertaController::class,'view'])->name('dataPeserta');
    Route::post('/data_peserta',[dataPesertaController::class,'save']);
});
Route::group(['middleware' => 'role:admin'], function () {

    Route::get('/verifikasi',[adminVerifikasiController::class,'view'])->name('adminVerifikasi');
    Route::post('/verifikasi',[adminVerifikasiController::class,'save']);
});


