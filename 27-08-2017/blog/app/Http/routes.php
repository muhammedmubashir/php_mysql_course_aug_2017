<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("blog","blogs@index");
Route::get("detail/{id}","blogs@detail");
Route::resource("users","UsersController");

// Route::get("users/{id}","UsersController@show");
// Route::get("users/{id}/edit","UsersController@edit");



// GET			/users/{id}/edit   edit 		users.edit

// GET			/users/{id} 	   show 		users.show
