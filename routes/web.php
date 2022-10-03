<?php

use App\Http\Controllers\BikesController;
use App\Http\Controllers\DeleteBikeController;
use App\Http\Controllers\EditBikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpdateBikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddNewBikeController;

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

Route::get('/', [HomeController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bikes', [BikesController::class, 'bikes'])->name('bikes');


Route::get('addNewBike', [AddNewBikeController::class, 'show']);
Route::get('add', [AddNewBikeController::class, 'add']);

Route::get('edit/{id}', [EditBikeController::class, 'edit']);
Route::get('update', [UpdateBikeController::class, 'update'])->name('update');
Route::get('delete/{id}', [DeleteBikeController::class, 'delete']);



