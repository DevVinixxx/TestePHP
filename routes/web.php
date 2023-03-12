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

Route::get('/update', [UserRegistrationController::class, 'update'])->name('update');

Route::get('/details', [UserRegistrationController::class, 'show'])->name('show');

Route::post('/store', [UserRegistrationController::class, 'store'])->name('store');
