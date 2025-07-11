<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use LivewireFilemanager\Filemanager\Http\Controllers\Files\FileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('file-manager', 'file-manager')->name('file-manager')->middleware('auth');

require __DIR__ . '/auth.php';

Route::get('{path}', [FileController::class, 'show'])->where('path', '.*')->name('assets.show');
