<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mundo', function () {
    return 'Hola Mundo';
});

// Ruta option 1
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// // Ruta option 2
// Route::prefix('categories')->group(function () {
//     Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
//     Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
//     Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
//     Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show');
//     Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//     Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
//     Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
// });

// // Ruta opcion 3
// Route::resource('categories', CategoryController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});













require __DIR__.'/auth.php';
