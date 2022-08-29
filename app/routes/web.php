<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartDisplay;
use App\Http\Controllers\showPizzaCardController;
use App\Http\Controllers\showStoreFrontController;

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

Route::get('/', function () {
    return view('startpage');
});

Route::get('/cart', cartDisplay::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/card/{id}', [showPizzaCardController::class, 'show']);

Route::get('/play', function () {
    return view('play');
});


Route::get('/front', [showStoreFrontController::class, 'show']);
