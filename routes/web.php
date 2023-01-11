<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TicketController;
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



Route::get('/', [OrderController::class, 'create'])->name('order');
Route::post('/', [OrderController::class, 'create'])->name('order');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('order', OrderController::class);
Route::resource('service', ServiceController::class);
Route::get('/viewInvoice', [OrderController::class, 'viewInvoice'])->name('viewInvoice');
Route::get('/generateInvoice', [OrderController::class, 'generateInvoice'])->name('/generateInvoice');



require __DIR__.'/auth.php';
