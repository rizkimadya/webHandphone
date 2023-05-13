<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HandphoneController;

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
Route::get('/detail', function () {
    return view('detail');
});

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'loginAuth'])->name('login.auth');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('handphone', [HandphoneController::class, 'index'])->name('handphone');
    Route::get('/handphone/create', [HandphoneController::class, 'create'])->name('handphone.create');
    Route::post('handphone', [HandphoneController::class, 'store'])->name('handphone.store');
    Route::get('/handphone/edit', [HandphoneController::class, 'edit'])->name('handphone.edit');
});
