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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about',[\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/weapon',[\App\Http\Controllers\WeaponsController::class, 'index']);
Route::get('/element',[\App\Http\Controllers\ElementContoller::class, 'index']);
Route::get('/user',[\App\Http\Controllers\UserController::class, 'index']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
