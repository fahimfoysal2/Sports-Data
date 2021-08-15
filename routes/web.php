<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyfinalController;
use App\Http\Controllers\MylineController;
use App\Http\Controllers\MyscoreController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'list'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/mylines', [MylineController::class, 'list'])->name('myline');
Route::get('/myscore', [MyscoreController::class, 'list'])->name('myscore');
Route::get('/myfinal', [MyfinalController::class, 'list'])->name('myfinal');

Route::get('/test', [MyfinalController::class, 'test']);

