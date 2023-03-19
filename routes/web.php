<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SellController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/bb', function () {
    return view('billboard');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'AppController@index')->name('home');
Route::get('/shop', 'AppController@index')->name('home')->middleware('auth');
Route::get('/cart', 'AppController@index')->name('home')->middleware('auth');
Route::get('/admin', 'AppController@admin')->name('admin')->middleware('auth');
Route::get('/admin/{any}', 'AppController@admin')->where('any', '.*')->middleware('auth');
Route::get('/{any}', 'AppController@index')->where('any', '.*');