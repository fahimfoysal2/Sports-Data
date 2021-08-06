<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'list'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mylines', [App\Http\Controllers\MylineController::class, 'list'])->name('myline');
Route::get('/myscore', [App\Http\Controllers\MyscoreController::class, 'list'])->name('myscore');
Route::get('/myfinal', [App\Http\Controllers\MyfinalController::class, 'list'])->name('myfinal');

