<?php

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

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ElementContoller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeaponsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[AboutController::class, 'index']);
Route::get('/weapon',[WeaponsController::class, 'index']);
Route::get('/element',[ElementContoller::class, 'index']);
Route::get('/user',[UserController::class, 'index']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
