<?php
use Illuminate\Support\Facades\Route;

Route::get('db','Abi\HomeController@di');
// php artisan make:controller Abi/HomeController
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'abi', 'middleware' => 'web'],function() {
    Route::get('/','Abi\HomeController@index')->name('abi.home');
});
