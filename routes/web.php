<?php

use App\Http\Controllers\BikesController;
use App\Http\Controllers\DeleteBikeController;
use App\Http\Controllers\EditBikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpdateBikeController;
use App\Http\Controllers\YourBikeController;
use App\Models\Bike;
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

Auth::routes();
Route::get('/', [HomeController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/yourBikes', [YourBikeController::class, 'yourBikes']);
//Route::get('/bikes', [BikesController::class, 'bikes'])->name('bikes');
//Route::get('/bike', [BikesController::class, 'bike'])->name('bike');

Route::get('/bikes', function () {
    return view('bikes', [
        'bikes' => Bike::all()
    ]);
});

Route::get('/bikes{bike}', function ($brand) {
    $path = __DIR__ . "/../resources/views/bikes/{$brand}.html";

    ddd($path);

    if (! file_exists($path)) {
        return redirect('/bike');
    }

    $bike = file_get_contents($path);

    return view('bike', [
        'bike' => $bike
    ]);
});

//Route::get('/bikes{bike}', function (Bike $bike) {
//    return view('bike', [
//        'bike' => $bike
//    ]);
//});

Route::get('addNewBike', [AddNewBikeController::class, 'show']);
Route::get('add', [AddNewBikeController::class, 'add']);

Route::get('edit/{id}', [EditBikeController::class, 'edit']);
Route::get('update', [UpdateBikeController::class, 'update'])->name('update');
Route::get('delete/{id}', [DeleteBikeController::class, 'delete']);



