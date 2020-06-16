<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "CaneController@index");
Route::get('/showcane/{id}', "CaneController@show")->name("showcane");
