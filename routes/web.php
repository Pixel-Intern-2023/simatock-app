<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Services\DashboardController;
use App\Http\Controllers\Services\DataController;
use App\Http\Controllers\Services\ProductsController;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware(['guest'])->group(function () {
    Route::match(['get', 'post'], '/', [AuthController::class, 'login'])->name('login');
    Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
});


Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('main-data')->group(function () {
        Route::get('/list-barang', [DataController::class, 'list_product'])->name('list-products');
        Route::get('/list-suplier', [DataController::class, 'list_suplier'])->name('list-suplier');
        Route::get('/list-satuan', [DataController::class, 'list_unit'])->name('list-unit');
    });
});
