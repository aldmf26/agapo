<?php

use App\Http\Controllers\AksesConttroller;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\Buku_besar;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Isi_jurnalpengeluaran;
use App\Http\Controllers\Jurnal_pemasukan;
use App\Http\Controllers\Jurnal_pengeluaran;
use App\Http\Controllers\Jurnal_penyesuaian;
use App\Http\Controllers\Jurnal_penyesuaian2;
use App\Http\Controllers\Neraca_saldo;
use App\Http\Controllers\Penjualan;
use App\Http\Controllers\Penjualan_ayam;
use App\Http\Controllers\Penjualan_kardus;
use App\Http\Controllers\Penjualan_pupuk;
use App\Http\Controllers\Piutang_ayam;
use App\Http\Controllers\Piutang_kardus;
use App\Http\Controllers\Piutang_pupuk;
use App\Http\Controllers\Piutang_telur;
use App\Http\Controllers\Setoran_ayam;
use App\Http\Controllers\Setoran_kardus;
use App\Http\Controllers\Setoran_pupuk;
use App\Http\Controllers\Setoran_telur;
use App\Http\Controllers\User;
use App\Http\Controllers\Verify;
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

Route::get('/', function () {
    return view('auth.login_new');
})->name('signin');

Route::has('password.request');

Route::get('/verify', [Verify::class, 'index'])->name('verify');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/plus_barang', [Dashboard::class, 'plus_barang'])->middleware(['auth', 'verified'])->name('plus_barang');
Route::post('/save_po', [Dashboard::class, 'save_po'])->middleware(['auth', 'verified'])->name('save_po');



Route::get('/sidebar', [Dashboard::class, 'index'])->middleware(['auth', 'verified'])->name('sidebar');

// Sidebar
Route::get('/sidebar', [AksesConttroller::class, 'index'])->middleware(['auth', 'verified'])->name('sidebar');
Route::post('/save_submenu', [AksesConttroller::class, 'save_sub_menu'])->middleware(['auth', 'verified'])->name('save_submenu');
Route::post('/save_menu', [AksesConttroller::class, 'save_menu'])->middleware(['auth', 'verified'])->name('save_menu');
Route::post('/save_urutan', [AksesConttroller::class, 'save_urutan'])->middleware(['auth', 'verified'])->name('save_urutan');

// user
Route::get('/user', [User::class, 'index'])->middleware(['auth', 'verified'])->name('user');
Route::get('/permission', [User::class, 'permission'])->name('permission');
Route::post('/updatepermission', [User::class, 'updatepermission'])->name('updatepermission');


require __DIR__ . '/auth.php';
