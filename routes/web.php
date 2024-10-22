<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;

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

Route::get('/siteapp', [ClientController::class, 'showsiteapp'])->name('siteapp');
Route::post('/siteappsave', [ClientController::class, 'regsiteapp'])->name('siteapp.save');

Route::get('/franchise', [ClientController::class, 'showfranchise'])->name('franchise');
Route::post('/franchisesave', [ClientController::class, 'regfranchise'])->name('franchise.save');

Route::get('/marketplace', [ClientController::class, 'showmarketplace'])->name('marketplace');
Route::post('/marketplacesave', [ClientController::class, 'regmarketplace'])->name('marketplace.save');

require __DIR__.'/auth.php';



Route::get('/welcome', [ClientController::class, 'index'])->name(name: 'welcome');
Route::get('/welcome/statistics', [ClientController::class, 'getStatistics']);

