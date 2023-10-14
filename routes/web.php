<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/create/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.index');
Route::post('/create/user', [UserController::class, 'store'])->middleware(['auth'])->name('user.store');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('user.destroy');

Route::get('/edit/user/{user}', [UserController::class, 'edit'])->middleware(['auth'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');

Route::get('/users/table', [UserController::class, 'showTable'])->middleware(['auth'])->name('users.table');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
