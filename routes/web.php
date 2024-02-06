<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SertifikatController;


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


Route::prefix('dashboard')->group(function() {
    Route::get('/', function() {
        return view('sertifikat.create');
    })->name('dashboard')->middleware(['auth']);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'index']);
Route::post('login/login', [AuthController::class, 'login'])->name('login.login');
Route::get('login/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login/logout', [AuthController::class, 'logout']);

Route::post('sertifikat', [SertifikatController::class, 'store'])->name('sertifikat.store');
Route::resource('sertifikat', SertifikatController::class)->except(['store']);
Route::put('/sertifikat/{sertifikat}', 'SertifikatController@update')->name('sertifikat.update');


Route::resource('peserta', PesertaController::class);
Route::get('/search', [PesertaController::class, 'search'])->name('search');