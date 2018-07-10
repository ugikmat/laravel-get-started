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
})->middleware('guest');

Route::group(['prefix' => 'xl'], function () {
    Auth::routes();
});

// Route::group(['prefix' => 'karoseri'], function () {
//     Auth::routes();
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register','Auth\RegisterController@create');
Route::post('register','Auth\RegisterController@store');
