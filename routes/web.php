<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\buku_controller;
use App\Http\Controllers\kepalaperpuscontroller;
use App\Http\Controller\peminjaman_buku_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Buku Controller
Route::controller('buku_controller::class')->group(function () {
    Route::get('/buku', 'index')->name('buku.index');
    Route::get('/buku/create', 'create')->name('buku.create');
    Route::post('/buku', 'store')->name('buku.store');
    Route::get('/buku/{buku}', 'update')->name('buku.update');
    Route::put('/buku/{buku}/edit', 'edit')->name('buku.update');
    Route::delete('/buku/{buku}','destroy')->name('buku.destroy');
});
