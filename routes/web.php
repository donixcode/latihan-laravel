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
Route::auth();

Route::group(['middleware'=>'auth'], function(){

Route::get('/','KelasController@index');

Route::get('kelas/add', 'KelasController@create');
Route::post('kelas/add','KelasController@store');

Route::get('kelas/{id}/edit','KelasController@edit');
Route::patch('kelas/{id}/edit','KelasController@update');

Route::delete('kelas/{id}/delete','KelasController@destroy');

Route::get('siswa','SiswaaController@index');
Route::get('siswa/add','SiswaaController@create');
Route::post('siswa/add','SiswaaController@store');

Route::get('siswa/{id}/edit','SiswaaController@edit');
Route::patch('siswa/{id}/edit','SiswaaController@update');

Route::delete('siswa/{id}/delete','SiswaaController@destroy');

});