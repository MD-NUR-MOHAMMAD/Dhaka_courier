<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('welcome');
// });

Route ::get('/', [HomeController::class, 'index'])->name('home');

//HomeController
Route ::get('user', [UserController::class, 'index'])->name('home');
Route ::get('user/create', [UserController::class, 'create'])->name('home');
Route ::get('user/edit', [UserController::class, 'edit'])->name('home');
Route ::get('user/update', [UserController::class, 'update'])->name('home');

//EmployeeController
Route ::get('employee', [EmployeeController::class, 'index']);
Route ::get('employee/create', [EmployeeController::class, 'create'])->name('home');
Route ::get('employee/edit', [EmployeeController::class, 'edit'])->name('home');

//ParcelController
Route ::get('parcel', [ParcelController::class, 'index']);
Route ::get('parcel/create', [ParcelController::class, 'create']);
Route ::get('parcel/edit', [ParcelController::class, 'edit']);

//PaymentController
Route ::get('payment', [PaymentController::class, 'index']);
Route ::get('payment/create', [PaymentController::class, 'create']);
Route ::get('payment/edit', [PaymentController::class, 'edit']);

//

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
