<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DashboardController;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tables', function () {
    return view('tables');
});


Route::get('Profile', function () {
    return view('profile');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->middleware(['view'])->name('login');

Route::get('/formulir', function () {
    return View('formulir');
})->name('formulir');

Route::get('cetak', function () {
    return View('cetak');
})->name('Cetak');


Route::post('/tambah-pasien', [PatientController::class, 'store']);
Route::get('/cetak/{id}', 'App\Http\Controllers\CetakController@cetakPDF');


Route::get('/Register', function () {
    return view('Register');
})->middleware(['view'])->name('Register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


