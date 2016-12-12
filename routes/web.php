<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

# Home
Route::get('/', 'HomeController@index');

# about
Route::get('about', 'aboutController@index');

# contact
Route::get('contact', 'contactController@index');

# errors
Route::get('error', 'errorsController@index');

# login
Route::get('login', 'loginController@index');


# search - result
Route::get('search', 'searchController@index');

# byAlpha
Route::get('byalpha', 'byAlphaController@index');

# byArea
Route::get('byarea', 'byareaController@index');

# byCategory
Route::get('bycategory', 'bycategoryController@index');

# json file stream
Route::get('jsonobject', 'JsonController@index');

# Route for testing page
Route::get('test', function(){
	return view('test');
});






