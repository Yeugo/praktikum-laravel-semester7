<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SatuanController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// user
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('printpdf', [UserController::class, 'printPDF'])->name('printuser');
Route::get('printexcell', [UserController::class, 'userExcell'])->name('exportuser');


// product
Route::resource('/products', ProductController::class);

// kategori
Route::resource('/kategoris', KategoriController::class);

// satuan
Route::resource('/satuans', SatuanController::class);

// kustomer
Route::resource('/kustomers', KustomerController::class);


