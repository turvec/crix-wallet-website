<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payment/callback', 'WalletController@fundCallback')->name('wallet.callback');

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user');
    Route::get('all-transactions', 'UserController@allTransaction')->name('all.transaction');
    Route::post('fund', 'WalletController@fund')->name('fund');
});

