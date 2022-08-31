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
/*
Route::get('/', function () {
    return view('startpage');
});
*/
Route::get('/cart', cartDisplay::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/card/{id}', [showPizzaCardController::class, 'show']);

Route::get('/play', function () {
    return view('play');
});

Route::get('/', [showStoreFrontController::class, 'show']);

Route::get('/fronttest', [storeFronTestController::class, 'show']);

Route::get('/getFromDBTEST', [\App\Http\Controllers\getItemsFromDBTESTController::class, 'test']);

Route::get('/WTWGetRoute', [\App\Http\Controllers\WTWGetController::class, 'test']);

Route::get('/getItemsFromDB', [\App\Http\Controllers\getItemsFromDBController::class, 'getItems']);

Route::get('/order', [\App\Http\Controllers\orderPageController::class, 'index']);

//Route::get('/test', [\App\Http\Controllers\requestTestController::class, 'store']);

Route::post('/test', [\App\Http\Controllers\requestTestController::class, 'store']);

Route::get('/teest', function (){
    return view('testPost');
});
