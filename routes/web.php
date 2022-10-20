<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;

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

Route::get('/', [DefaultController::class, 'home'])->name('home');
Route::get('/services', [DefaultController::class, 'home'])->name('services');
Route::get('/team', [DefaultController::class, 'home'])->name('team');
Route::get('/gallery', [DefaultController::class, 'home'])->name('gallery');
Route::get('/contacts', [DefaultController::class, 'home'])->name('contacts');
