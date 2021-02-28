<?php

use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Other\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('user', UserController::class);

Route::resource('record', RecordController::class)->middleware(['']);

Route::middleware([])->get('/search/user', [UserController::class, 'search']);

Route::middleware([])->post('/image/upload', [ImageController::class,'uploadPhoto'])->name('uploadPhoto');
