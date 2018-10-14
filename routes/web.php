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
// php artisan make:controller Abi/HomeController
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'abi', 'middleware' => 'web'],function() {
    Route::get('/','Abi\HomeController@index')->name('abi.home');
});
