<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Invokable\AboutController;
use App\Http\Controllers\Invokable\ApiPageController;
use App\Http\Controllers\Invokable\CabinetController;
use App\Http\Controllers\Invokable\HomeController;
use App\Http\Controllers\Invokable\SearchController;
use App\Http\Controllers\Invokable\WelcomeController;
use App\Http\Controllers\RecordsController;
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

Route::get('/info', ApiPageController::class)->name("api");

Route::get('/search', SearchController::class)->name("search");

Route::get('/home', HomeController::class)->name('home');

Route::get('/records', [RecordsController::class, 'index'])->name('records');

Route::get('user/{id}/records', [RecordsController::class, 'indexByUserId'])
    ->name('user.records')
    ->where('id', '[0-9]+');;


Route::get('/records/create', [RecordsController::class, 'create'])->name('records.create');

Route::get('/records/{id}/view', [RecordsController::class, 'view'])
    ->name('records.view')
    ->middleware(['auth'])
    ->where('id','[0-9]+');


Route::get("/user/{id}/cabinet", CabinetController::class)
    ->name('cabinet')
    ->middleware(["auth", "user"])
    ->where('id', '[0-9]+');

