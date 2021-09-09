<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/create', [ServiceController::class, 'create'])->name('service_create');
Route::get('/service/{service:title}', [ServiceController::class, 'show'])->name('service_show');
Route::post('/services/create', [ServiceController::class, 'store'])->name('service_store');
Route::delete('/services/delete/{service}', [ServiceController::class, 'delete'])->name('service_delete');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact_store');