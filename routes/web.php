<?php

use Illuminate\Support\Facades\Route;

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
// Auth::routes();

// Route::get('/', function () {
//     return view('pages.auth.login');
// });
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('/newpost', [App\Http\Controllers\PostController::class, 'newpost'])->name('newpost');
    Route::post('/post', [App\Http\Controllers\PostController::class, 'insert'])->name('insert_newpost');
    Route::delete('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('delete_post');
    Route::get('/post/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit_post');
    Route::patch('/post/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('update_post');
    Route::get('/galery', [App\Http\Controllers\PostController::class, 'galery'])->name('galery');
    Route::get('/kategoripost', [App\Http\Controllers\KategoripostController::class, 'index'])->name('postkategori');
    Route::delete('/kategoripost/delete/{id}', [App\Http\Controllers\KategoripostController::class, 'delete'])->name('delete_kategoripost');
    Route::get('/kategoripost/{id}/edit', [App\Http\Controllers\KategoripostController::class, 'edit'])->name('edit_kategoripost');
    Route::get('/tambahpostktr', [App\Http\Controllers\KategoripostController::class, 'tambahpostktr'])->name('tambahpostktr');
    Route::post('/kategoripost', [App\Http\Controllers\KategoripostController::class, 'insert'])->name('insert_kategoripost');
    Route::post('/kategoripost', [App\Http\Controllers\KategoripostController::class, 'insert'])->name('insert_kategoripost');
    Route::get('/pembinaan', [App\Http\Controllers\PembinaanController::class, 'kelola_pembinaan'])->name('kelola_pembinaan');
    Route::delete('/pembinaan/delete/{id}', [App\Http\Controllers\PembinaanController::class, 'delete'])->name('delete_pembinaan');
    Route::get('/pengajuanlayanan', [App\Http\Controllers\LayananController::class, 'kelola_pengajuanlayanan'])->name('kelola_pengajuanlayanan');
    Route::delete('/pengajuanlayanan/delete/{id}', [App\Http\Controllers\LayananController::class, 'delete'])->name('delete_pengajuanlayanan');
    Route::get('/master_barang', [App\Http\Controllers\MasterController::class, 'index'])->name('master_barang');
    Route::get('/tambah_master_barang', [App\Http\Controllers\MasterController::class, 'barang'])->name('tambah_master_barang');
    Route::post('/master_barang/tambah', [App\Http\Controllers\MasterController::class, 'insert'])->name('tambahmasterbarang');
    Route::delete('/master_barang/delete/{id}', [App\Http\Controllers\MasterController::class, 'delete'])->name('delete_master');
    Route::get('/master_barang/{id}/edit', [App\Http\Controllers\MasterController::class, 'edit'])->name('edit_master_barang');
    Route::patch('/master_barang/{id}', [App\Http\Controllers\MasterController::class, 'update'])->name('update_master_barang');
    Route::get('/master_satuan', [App\Http\Controllers\MastersatuanController::class, 'index'])->name('master_satuan');
    Route::get('/tambah_master_satuan', [App\Http\Controllers\MastersatuanController::class, 'satuan'])->name('tambah_master_satuan');
    Route::post('/master_satuan/tambah', [App\Http\Controllers\MastersatuanController::class, 'insert'])->name('tambahmastersatuan');
    Route::delete('/master_satuan/delete/{id}', [App\Http\Controllers\MastersatuanController::class, 'delete'])->name('delete_master_satuan');
    Route::get('/master_satuan/{id}/edit', [App\Http\Controllers\MastersatuanController::class, 'edit'])->name('edit_master_satuan');
    Route::patch('/master_satuan/{id}', [App\Http\Controllers\MastersatuanController::class, 'update'])->name('update_master_satuan');
    Route::get('/pembelian', [App\Http\Controllers\PembelianController::class, 'index'])->name('pembelian');
    Route::post('/tambah_pembelian', [App\Http\Controllers\PembelianController::class, 'insert'])->name('insert_pembelian');
    Route::get('/stok', [App\Http\Controllers\StokController::class, 'index'])->name('stok');
    Route::get('/penjualan', [App\Http\Controllers\PenjualanController::class, 'index'])->name('penjualan');
    Route::post('/tambah_penjualan', [App\Http\Controllers\PenjualanController::class, 'insert'])->name('insert_penjualan');
    Route::get('/laporan-pembelian', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan_pembelian');
    Route::get('/laporan-penjualan', [App\Http\Controllers\LaporanController::class, 'penjualan'])->name('laporan_penjualan');
    Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'laporan'])->name('laporan');
    Route::get('/debet', [App\Http\Controllers\DebetController::class, 'index'])->name('debet');
    Route::post('/insert_debet', [App\Http\Controllers\DebetController::class, 'insert'])->name('insert_debet');
    Route::get('/laporan-cetak', [App\Http\Controllers\LaporanController::class, 'cetak_laporan'])->name('cetak_laporan');
    Route::get('/laporan-pembelian-cetak', [App\Http\Controllers\LaporanController::class, 'cetak_pembelian'])->name('cetak_pembelian');
    Route::get('/laporan-penjualan-cetak', [App\Http\Controllers\LaporanController::class, 'cetak_penjualan'])->name('cetak_penjualan');



    
});
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'detail'])->name('detail');
Route::get('layanan/pembinaan', [App\Http\Controllers\PembinaanController::class, 'index'])->name('pembinaan');
Route::post('layanan/pembinaan', [App\Http\Controllers\PembinaanController::class, 'insert'])->name('insert_pembinaan');
Route::get('layanan/pengajuanlayanan', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan');
Route::post('layanan/pengajuanlayanan', [App\Http\Controllers\LayananController::class, 'insert'])->name('insert_pengajuanlayanan');
Route::get('layanan/stok', [App\Http\Controllers\StokController::class, 'stok'])->name('layanan_stok');
// Route::get('/register', function () {
//     return view('pages.auth.register');
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
