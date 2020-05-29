<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/galerie', 'GalerieController@index')->name('galerie');
Route::get('/show/{id}',"GalerieController@show")->name("show");
Route::get('/add', "GalerieController@create")->name('add');
Route::post("/saveIngredient", "GalerieController@store")->name("saveGalerie");
Route::get('/edit/{id}', "GalerieController@edit")->name("edit");
Route::post('/update/{id}', "GalerieController@update")->name("update");
Route::get("/delete/{id}", "GalerieController@destroy")->name("delete");