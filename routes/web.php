<?php

use App\Http\Controllers\UserRegistrationController;
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

Route::get('/', [UserRegistrationController::class, 'index'])->name('index');

Route::get('/create', [UserRegistrationController::class, 'create'])->name('create');

Route::get('/details/{id?}', [UserRegistrationController::class, 'details'])->name('details');

Route::post('/store', [UserRegistrationController::class, 'store'])->name('store');

Route::delete('/delete/{id}', [UserRegistrationController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [UserRegistrationController::class, 'edit'])->name('show');

Route::put('/update/{id}', [UserRegistrationController::class, 'update'])->name('update');