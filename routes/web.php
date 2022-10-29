<?php


use App\Http\Controllers\ActiveController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YourBikeController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/yourBikes', [YourBikeController::class, 'yourBikes']);
Route::get('/bikes', [BikeController::class, 'index']);
Route::resource('bikes', BikeController::class);
Route::get('/category', [CategoryController::class, 'allRoad']);
Route::get('bikes/{bikes}/active', [BikeController::class, 'active'])->name('bikes.active');
Route::resource('user', UserController::class);
