<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Services\AdditionalDataController;
use App\Http\Controllers\Services\DataController;
use App\Http\Controllers\Services\DashboardController;
use App\Http\Controllers\Services\InfoController;
use App\Http\Controllers\Services\ProductOutController;
use App\Http\Controllers\Services\ProfileController;
use App\Models\ProductOut;

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
});
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
    Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/registered', [AuthController::class, 'registered'])->name('registered');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('main-data')->group(function () {
        Route::get('/list-barang', [DataController::class, 'list_product'])->name('list-barang');
        Route::get('/list-suplier', [DataController::class, 'list_suplier'])->name('List Suplier');
        Route::get('/recently-added', [DataController::class, 'recentlyAdded'])->name('Baru Ditambahkan');
        Route::match(['get', 'put'], 'edit-suplier{id}', [DataController::class, 'editSuplier'])->name('Edit Suplier');
        Route::match(['get', 'post'], 'tambah-suplier', [DataController::class, 'addSuplier'])->name('Form Tambah Suplier');
        Route::post('/add-product', [DataController::class, 'store'])->name('addProduct');
        Route::get('/tambah-barang', [DataController::class, 'form_tambah'])->name('Tambah Barang');
        Route::match(['get', 'put'], 'edit-form/{id}', [DataController::class, 'form_edit'])->name('Edit Data');
        Route::match(['get', 'delete'], '/delete-product/{id}', [DataController::class, 'removeProduct'])->name('delete');
        Route::get('/data-tambahan', [AdditionalDataController::class, 'additional_data'])->name('Data Tambahan');
        Route::match(['get', 'post'], '/additional-data/{val}', [AdditionalDataController::class, 'addAdditional'])->name('Tambah Data Tambahan');
        Route::match(['get', 'delete'], 'delete-additional/{val},{id}', [AdditionalDataController::class, 'removeAdditionalData'])->name('Hapus Data Tambahan');
        Route::get('export-data-produk', [DataController::class, 'exportProductIn'])->name('downloadDataProduct');
    });
    Route::prefix('activities')->group(function () {
        Route::get('/product-keluar', [ProductOutController::class, 'product_out'])->name('Barang Keluar');
        Route::match(['get', 'post'], '/form-produk-keluar', [ProductOutController::class, 'formProductOut'])->name('Form Barang Keluar');
        Route::post('/add-cart', [ProductOutController::class, 'addToCart'])->name('addToCart');
        Route::match(['delete', 'get'], '/delete-cart/{id}', [ProductOutController::class, 'deleteCart'])->name('deleteCart');
        Route::get('export-data-produk-keluar', [ProductOutController::class, 'exportProductOut'])->name('downloadDataOut');
    });
    Route::prefix('profile')->group(function () {
        Route::get('/admin', [ProfileController::class, 'profile'])->name('Profile');
        Route::match(['get', 'put'], '/edit-warehouse-name', [ProfileController::class, 'editWarehouseName'])->name('editWhName');
    });
    Route::prefix('info')->group(function () {
        Route::get('/list-admin', [InfoController::class, 'admin'])->name('List Admin');
        Route::get('/list-stok-habis', [InfoController::class, 'infoStock'])->name('List Stok Habis');
        Route::get('/activities', [InfoController::class, 'activities'])->name('Aktifitas');
    });
});
