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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/hello",function (){
// 	return view("hello");
// });
//php artisan make:controller blog


// Route::get("/blog","blog@index");

// Route::get("/bloglist","blog@lists");


//product/
Route::auth();

Route::get('/home', 'HomeController@index');


Route::get("/tasks","TaskController@index");
Route::post("/task","TaskController@store");
// Route::delete();
// patch
// Route::resource("/tasks","TaskController");