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

Route::get('/bingo', 'BingoController@index')->name('bingo.index');
Route::post('/bingo/sort', 'BingoController@sortNumber')->name('bingo.sort');
Route::delete('/bingo/clear', 'BingoController@clearGame')->name('bingo.clear');
