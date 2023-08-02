<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeMahasiswaController;


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

// Route::get('/form', function () {
//     return view('BarangMahasiswa.create');
// });

// Route::get('/forms', [App\Http\Controllers\BarangController::class, 'storeform'])->name('BarangMahasiswa.create');

Route::get('/homemahasiswa', [App\Http\Controllers\BarangController::class, 'indexmhs'])->name('BarangMahasiswa.index');
Route::get('/itemmahasiswa', [App\Http\Controllers\BarangController::class, 'items'])->name('BarangMahasiswa.item');


// Route::get('/homemahasiswaitempinjam', [App\Http\Controllers\BarangController::class, 'createform'])->name('BarangMahasiswa.create');

// Route::get('/homemahasiswaitem', [App\Http\Controllers\BarangController::class, 'storeform'])->name('BarangMahasiswa.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\BarangController::class, 'index'])->name('Barang.index');
Route::get('/homeitem', [App\Http\Controllers\BarangController::class, 'itemsa'])->name('Barang.item');
Route::get('/homehistory', [App\Http\Controllers\BarangController::class, 'history'])->name('Barang.history');

Route::get('/forms', [\App\Http\Controllers\BarangController::class, 'createform'])->name('BarangMahasiswa.create');
Route::resource('barangs', BarangController::class);
Route::resource('forms', BarangController::class);
Route::get('/barang/json', [\App\Http\Controllers\BarangController::class, 'data'])->name('barang.data');
Route::get('/history/json', [\App\Http\Controllers\BarangController::class, 'dataform'])->name('barang.dataform');
Route::get('/barang', [\App\Http\Controllers\BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/cetak_pdf', [App\Http\Controllers\BarangController::class, 'cetak_pdf']);
