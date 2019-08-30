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
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('agregar',function(){
    return view('agregar');
})->name('agregar');

Route::get('editar',function(){
    return view('editar');
})->name('editar');

Route::get('modificar/{id?}',function($id = null){
    $numero=$id;
    return view('modificar',compact('numero','id'));
})->where('id','[0-9]+');