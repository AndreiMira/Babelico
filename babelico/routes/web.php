<?php

use App\Http\Controllers\DestinosController;
use App\Http\Controllers\ProfileController;
use Database\Seeders\Destinos;
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

Route::get('/', function () {
    return view('auth');
});

Route::get('/destinos', function () {
    return view('destinos.index');
})->middleware(['auth', 'verified'])->name('destinos.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/destinos', [DestinosController::class, 'index'])->name('destinos.index');

require __DIR__.'/auth.php';
