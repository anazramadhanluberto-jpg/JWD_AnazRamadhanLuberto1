<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/katalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('/katalog/{id}', [ProductController::class, 'show'])->name('detail');

// Route Admin (CRUD)
Route::prefix('admin')->group(function () {
    Route::get('/', [ProductController::class, 'admin'])->name('admin.index');
    Route::get('/tambah', [ProductController::class, 'create'])->name('admin.create');
    Route::post('/simpan', [ProductController::class, 'store'])->name('admin.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.update');
    Route::delete('/hapus/{id}', [ProductController::class, 'destroy'])->name('admin.destroy');
});
