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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Table1Controller@index');
Route::get('/data-tables', 'Table2Controller@index');

Route::prefix("pertanyaan")->group(function() {
    Route::get('/', 'PertanyaanController@index');
    Route::get('/create', 'PertanyaanController@create');
    Route::post('/', 'PertanyaanController@store');
    Route::get('/{pertanyaan_id}', 'PertanyaanController@show');
    Route::get('/{pertanyaan_id}/edit', 'PertanyaanController@edit');
    Route::post('/{pertanyaan_id}', 'PertanyaanController@update');
    Route::get('/delete/{pertanyaan_id}', 'PertanyaanController@destroy');
});