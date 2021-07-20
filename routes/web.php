<?php

use App\Http\Controllers\Pages\HomePageController;
use App\Http\Controllers\Pages\RoomsPageController;

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

Route::get('/' , [HomePageController::class, 'index'])->name('home-page');
Route::get('/room', [RoomsPageController::class, 'index'] )->name('room.index');
Route::get('/room/{room}', [RoomsPageController::class, 'show'] )->name('room.show');
