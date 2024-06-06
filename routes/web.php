<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminRole;
use App\Http\Middleware\CheckClientRole;
use App\Http\Middleware\CheckEmployeeRole;
use Illuminate\Support\Facades\Route;

Route ::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(CheckAdminRole::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin');
});


Route::middleware(CheckEmployeeRole::class)->group(function () {
    Route::get('/employee', [AdminController::class, 'employeeIndex'])->name('employee');
    Route::resource('transport', TransportController::class);
});


Route::middleware(CheckClientRole::class)->group(function () {
    Route::get('/client', [AdminController::class, 'clientIndex'])->name('client');
});



require __DIR__.'/auth.php';
