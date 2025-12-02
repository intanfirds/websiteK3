<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\K3Controller;
use App\Http\Controllers\CSRController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/k3', [K3Controller::class, 'index'])->name('k3');

Route::prefix('k3')->group(function () {
    Route::get('/', [K3Controller::class, 'index'])->name('k3');

    Route::get('/pendahuluan', [K3Controller::class, 'pendahuluan'])->name('k3.pendahuluan');
    Route::get('/landasan-hukum', [K3Controller::class, 'landasan'])->name('k3.landasan');
    Route::get('/lingkungan-kerja-fisik', [K3Controller::class, 'lingkungan'])->name('k3.lingkungan');
    Route::get('/keselamatan-kerja', [K3Controller::class, 'keselamatan'])->name('k3.keselamatan');
    Route::get('/apd', [K3Controller::class, 'apd'])->name('k3.apd');
    Route::get('/P3K', [K3Controller::class, 'pertolongan'])->name('k3.pertolongan');
    Route::get('/organisasi', [K3Controller::class, 'organisasi'])->name('k3.organisasi'); 
    Route::get('/risiko', [K3Controller::class, 'risiko'])->name('k3.risiko'); 
    Route::get('/audit', [K3Controller::class, 'audit'])->name('k3.audit'); 
});
