<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/back')->group(function () {
    Route::view('/', 'backend.index')->name('backend.index');
    Route::resource('/categorias','CategoriasController');
    Route::resource('/cursos','CursosController');
    Route::resource('/empresa','EmpresasController');
    Route::resource('/videos','VideosController');
});

Route::get('/','PagesController@index')->name('inicio');
Route::get('/ver','PagesController@ver')->name('ver');
Route::get('/cursos','PagesController@cursos')->name('cursos');
Route::get('/biblioteca','PagesController@biblioteca')->name('biblioteca');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
