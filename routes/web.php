<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductOutController;
use App\Http\Controllers\Services\DashboardController;
use App\Http\Controllers\Services\DataController;
use Illuminate\Support\Facades\Route;

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
        Route::get('/list-barang', [DataController::class, 'list_product'])->name('list-barang');
        Route::post('/add-product', [DataController::class, 'store'])->name('addProduct');
        Route::get('/tambah-barang', [DataController::class, 'form_tambah'])->name('Tambah Barang');
        Route::get('edit-form/{id}', [DataController::class, 'form_edit'])->name('Edit Data');
        Route::put('edit/{id}', [DataController::class, 'edit'])->name('edit');
        Route::match(['get', 'delete'], '/delete-product/{id}', [DataController::class, 'removeProduct'])->name('delete');
        Route::get('/data-tambahan', [DataController::class, 'additional_data'])->name('Data Tambahan');
        Route::match(['get', 'post'], '/additional-data/{val}', [DataController::class, 'addAdditional'])->name('Tambah Data Tambahan');
        Route::match(['get', 'delete'], 'delete-additional/{val},{id}', [DataController::class, 'removeAdditionalData'])->name('Hapus Data Tambahan');
    });
    Route::prefix('activities')->group(function () {
        Route::get('/product-keluar', [ProductOutController::class, 'product_out'])->name('Barang Keluar');
        Route::match(['get', 'post'], '/form-produk-keluar', [ProductOutController::class, 'formProductOut'])->name('Form Barang Keluar');
        Route::post('/add-cart', [ProductOutController::class, 'addToCart'])->name('addToCart');
        Route::match(['delete', 'get'], '/delete-cart/{id}', [ProductOutController::class, 'deleteCart'])->name('deleteCart');
    });
});
