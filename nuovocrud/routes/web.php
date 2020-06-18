<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "DinosauriniController@index")->name("home");
Route::get('/show/{id}', "DinosauriniController@show")->name("show");
Route::get('/delete/{id}', "DinosauriniController@delete")->name("destroy");
Route::get('/create/dinosaurino', "DinosauriniController@create")->name("create");
Route::post('/store', "DinosauriniController@store")->name("store");
Route::get('/edit_dinosavuro/{id}', "DinosauriniController@edit")->name("edit");
Route::post('/update/{id}', "DinosauriniController@update")->name("update");
