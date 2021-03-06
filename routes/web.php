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
    return redirect('message');
});

Route::get('/message', 'MessageController@index')->name('message');

Route::get('/create', function () {
    return view('pages.create');
})->name('create');

Route::post('/create', 'MessageController@store');
