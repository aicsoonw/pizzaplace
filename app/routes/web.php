<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartDisplay;
use App\Http\Controllers\showPizzaCardController;
use App\Http\Controllers\showStoreFrontController;
use App\Http\Controllers\storeFronTestController;

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// our main page
Route::get('/', [showStoreFrontController::class, 'show']);

// retrieving data from items table route
Route::get('/getItemsFromDB', [\App\Http\Controllers\getItemsFromDBController::class, 'getItems']);

// order page
Route::get('/order', [\App\Http\Controllers\orderPageController::class, 'index']);

// posting / inserting data to DB
Route::post('/postOrder', [\App\Http\Controllers\createOrderController::class, 'init']);
