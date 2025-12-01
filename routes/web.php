<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/pegawai', [PegawaiController::class, 'index']);{
}

Route::get('/', function () {
    return view('welcome');
})->name('mahasiswa.show');

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/home', [HomeController::class, 'index']);{
}

Route::get('/about', function () {
    return view('halaman-about');
});

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index']) //project lab
    ->name('dashboard')
    ->middleware('checkislogin');

Route::resource('pelanggan', PelangganController::class);

Route::group(['middleware' => ['checkrole', 'checkrole:SuperAdmin']], function () {
    Route::resource('users', UserController::class);
});
Route::resource('users', UserController::class);

Route::get('auth', [AuthController::class, 'index'])->name('auth');
Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
