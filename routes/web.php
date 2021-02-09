<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Invokable\AboutController;
use App\Http\Controllers\Invokable\ApiPageController;
use App\Http\Controllers\Invokable\HomeController;
use App\Http\Controllers\Invokable\WelcomeController;
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

Route::get('/', WelcomeController::class)->name("welcome");

Route::get('/about', AboutController::class)->name("about");

Route::get('/api/info', ApiPageController::class)->name("api");

Route::get('/home', HomeController::class)->name('home');

