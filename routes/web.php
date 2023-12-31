
<?php

use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'auth.login');



Route::get('login', 'App\Http\Controllers\AuthController@login')->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'checkRole:admin'])->group(function () {

    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('mahasiswa','index')->name('mahasiswa.index'); // Add this line
        Route::get('mahasiswa/create', 'create')->name('mahasiswa.create');
        Route::post('mahasiswa', 'store')->name('mahasiswa.store');
        Route::get('mahasiswa/detail{id}', 'detail')->name('mahasiswa.detail');
        Route::get('mahasiswa/{id}/edit', 'edit')->name('mahasiswa.edit');
        Route::put('mahasiswa/{id}', 'update')->name('mahasiswa.update');
        Route::delete('mahasiswa/{id}','destroy')->name('mahasiswa.destroy');
        Route::put('mahasiswa/reset-pass/{id}', 'resetPass')->name('mahasiswa.reset_pass');
    });

    Route::controller(App\Http\Controllers\Admin\PegawaiController::class)->group(function () {
        Route::get('pegawai','index')->name('pegawai.index'); // Add this line
        Route::get('pegawai/create', 'create')->name('pegawai.create');
        Route::post('pegawai', 'store')->name('pegawai.store');
        Route::get('pegawai/{id}/edit', 'edit')->name('pegawai.edit');
        Route::put('pegawai/{id}', 'update')->name('pegawai.update');
        Route::delete('pegawai/{id}','destroy')->name('pegawai.destroy');
        Route::put('pegawai/reset-pass/{id}', 'resetPass')->name('pegawai.reset_pass');
    });

    Route::controller(App\Http\Controllers\Admin\BarangController::class)->group(function () {
        Route::get('barang','index')->name('barang.index'); // Add this line
        Route::get('barang/create', 'create')->name('barang.create');
        Route::post('barang', 'store')->name('barang.store');
        Route::get('barang/{id}/edit', 'edit')->name('barang.edit');
        Route::put('barang/{id}', 'update')->name('barang.update');
        Route::delete('barang/{id}','destroy')->name('barang.destroy');
    });

    Route::controller(App\Http\Controllers\Admin\ApproveController::class)->group(function () {
        Route::get('approve', 'index')->name('aprove.index');
        Route::get('approve/detail/{user_id}', 'detail')->name('approve.detail');
        Route::post('aprove/{id}/setuju', 'setuju')->name('aprove.setuju');
        Route::get('aprove/{id}/tolak', 'tolak')->name('aprove.tolak');
        Route::put('aprove/{id}', 'tolak_update')->name('tolak.update');
        Route::get('aprove/{id}/denda', 'denda')->name('aprove.denda');
        Route::put('aprove/denda/{id}', 'denda_update')->name('denda.update');
        Route::get('aprove/{id}/kembali', 'kembali')->name('aprove.kembali');
        Route::put('aprove/kembali/{id}', 'kembali_update')->name('kembali.update');
        Route::get('aprove/{id}/lunas', 'lunas')->name('aprove.lunas');
        Route::get('aprove/{id}/kembalidenda', 'kembali_denda')->name('kembali.denda');
        Route::put('aprove/kembalidenda/{id}', 'kembali_denda_update')->name('kembali.denda.update');
    });
    
});


Route::prefix('mahasiswa')->middleware(['auth', 'checkRole:mahasiswa'])->group(function () {

    Route::controller(App\Http\Controllers\Mahasiswa\PinjamController::class)->group(function () {
        Route::get('pinjam','index')->name('pinjam.index');
        Route::post('pinjam/{id}','pinjam')->name('pinjam.pinjam');
        Route::get('checkout','checkout')->name('pinjam.checkout');
        Route::get('checkout/{id}/edit', 'edit')->name('checkout.edit');
        Route::put('checkout/{id}', 'update')->name('checkout.update');
        Route::delete('checkout/{id}','destroy')->name('checkout.destroy');
        Route::put('checkout/submit/{id}', 'submit')->name('checkout.submit');
    });

    Route::controller(App\Http\Controllers\Mahasiswa\HistoryController::class)->group(function () {
        Route::get('history','index')->name('history.index');
        Route::get('history/detail/(id}','detail')->name('history.detail');
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
