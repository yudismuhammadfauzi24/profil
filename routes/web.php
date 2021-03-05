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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'profil'],function(){
    Route::get('index','ProfilController@index')->name('profil.index');
    Route::get('create','ProfilController@create')->name('profil.create');
    Route::post('store','ProfilController@store')->name('profil.store');
    Route::get('edit,{profile}','ProfilController@edit')->name('profil.edit');
    Route::patch('update,{profile}','ProfilController@update')->name('profil.update');
    Route::delete('/delete/{profile}', 'ProfilController@destroy')->name('profil.delete');
    Route::get('laporan-profil', 'Laporan\ProfilController@index')->name('laporan.periode.profil');


});