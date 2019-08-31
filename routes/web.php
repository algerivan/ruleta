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

Route::get('/','PagesController@inicio')->name('inicio');

Auth::routes();

Route::get('agregar','PagesController@agregar')->name('agregar');

Route::get('editar','PagesController@editar')->name('editar');

Route::get('modificar/{id?}','PagesController@modificar')->where('id','[0-9]+')->name('modificar');

Route::post('agregaOpcion', 'PagesController@agregaOpcion')->name('opcion.crear');

Route::put('actualizar/{id}','PagesController@actualizar')->name('opcion.update');

Route::delete('eliminar/{id}', 'PagesController@eliminar')->name('opcion.eliminar');

Route::get('girar', 'PagesController@girar');