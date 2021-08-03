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
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('/newpost', [App\Http\Controllers\PostController::class, 'newpost'])->name('newpost');
    Route::post('/post', [App\Http\Controllers\PostController::class, 'insert'])->name('insert_newpost');
    Route::delete('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('delete_post');
    Route::get('/post/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit_post');
    Route::patch('/post/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('update_post');
    Route::get('/galery', [App\Http\Controllers\PostController::class, 'galery'])->name('galery');
    Route::get('/kategoripost', [App\Http\Controllers\KategoripostController::class, 'index'])->name('postkategori');
    Route::get('/tambahpostktr', [App\Http\Controllers\KategoripostController::class, 'tambahpostktr'])->name('tambahpostktr');
    Route::post('/kategoripost', [App\Http\Controllers\KategoripostController::class, 'insert'])->name('insert_kategoripost');
    Route::post('/kategoripost', [App\Http\Controllers\KategoripostController::class, 'insert'])->name('insert_kategoripost');
    Route::get('/pembinaan', [App\Http\Controllers\PembinaanController::class, 'kelola_pembinaan'])->name('kelola_pembinaan');
    Route::delete('/pembinaan/delete/{id}', [App\Http\Controllers\PembinaanController::class, 'delete'])->name('delete_pembinaan');
    Route::get('/pengajuanlayanan', [App\Http\Controllers\LayananController::class, 'kelola_pengajuanlayanan'])->name('kelola_pengajuanlayanan');
    Route::delete('/pengajuanlayanan/delete/{id}', [App\Http\Controllers\LayananController::class, 'delete'])->name('delete_pengajuanlayanan');
    Route::get('/master_barang', [App\Http\Controllers\MasterController::class, 'index'])->name('master_barang');
    Route::get('/master_barang/tambah', [App\Http\Controllers\MasterController::class, 'barang'])->name('tambah_master_barang');
    Route::post('/master_barang/tambah', [App\Http\Controllers\MasterController::class, 'insert'])->name('tambahmasterbarang');
    Route::delete('/master_barang/delete/{id}', [App\Http\Controllers\MasterController::class, 'delete'])->name('delete_master');

    
});
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'detail'])->name('detail');
Route::get('layanan/pembinaan', [App\Http\Controllers\PembinaanController::class, 'index'])->name('pembinaan');
Route::post('layanan/pembinaan', [App\Http\Controllers\PembinaanController::class, 'insert'])->name('insert_pembinaan');
Route::get('layanan/pengajuanlayanan', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan');
Route::post('layanan/pengajuanlayanan', [App\Http\Controllers\LayananController::class, 'insert'])->name('insert_pengajuanlayanan');
// Route::get('/register', function () {
//     return view('pages.auth.register');
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
