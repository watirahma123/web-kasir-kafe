<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\AdminTransaksiDetailController;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin'])->middleware('guest');
Route::get('/logout', [AdminAuthController::class, 'logout'])->middleware('auth');

Route::get('/template', function (){
    return view('template');
});

Route::get('/', function () {
    $data = [
        'content' => 'Admin.dashboard.index'
    ];
    return view('Admin.layout.wrapper', $data);
})->middleware('auth');

Route::prefix('/admin')->middleware('auth')->group(function (){
    Route::get('/dashboard', function(){
        $data = [
            'content' => 'Admin.dashboard.index'
        ];
        return view('Admin.layout.wrapper', $data);
    });

    Route::post('/transaksi/detail/create', [AdminTransaksiDetailController::class, 'create']);
    Route::resource('/transaksi', AdminTransaksiController::class);
    Route::resource('/produk', AdminProdukController::class);
    Route::resource('/kategori', AdminKategoriController::class);
    Route::resource('/user', AdminUserController::class);
});


