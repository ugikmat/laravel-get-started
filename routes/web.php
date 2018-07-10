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

Route::get('/sb_admin', function () {
    return view('sb_admin');
});


Route::group(['prefix' => 'xl'], function () {
    Auth::routes();
});

// Route::group(['prefix' => 'karoseri'], function () {
//     Auth::routes();
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/invoice_dompul', function () {
    return view('invoice_dompul');
})->name('invoice_dompul');

Route::get('/list_invoice_dompul', function () {
    return view('list_invoice_dompul');
})->name('list_invoice_dompul');

Route::get('/monitoring_upload', function () {
    return view('monitoring_upload');
})->name('monitoring_upload');

Route::get('/penjualan_dompul_head', function () {
    return view('penjualan_dompul_head');
})->name('penjualan_dompul_head');

Route::get('/mutasi_dompul', function () {
    return view('mutasi_dompul');
})->name('mutasi_dompul');

Route::get('/dompet_pulsa', function () {
    return view('dompet_pulsa');
})->name('dompet_pulsa');
