<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::model('occations','Occation');
Route::bind('occations',function($value, $route) {
	return Occation::whereId($value)->first();
});
Route::model('reports','Report');
Route::bind('reports',function($value, $route) {
	return Report::whereId($value)->first();
});
Route::model('discographyes','Discography');
Route::bind('discographyes',function($value, $route) {
	return Discography::whereId($value)->first();
});
Route::resource("discographyes", "DiscographyesController");
Route::resource('occations','OccationsController');
Route::resource('occations.coments','ComentsController');
Route::resource("users","UsersController");
Route::resource("reports","ReportsController");
Route::resource("coments","ComentsController");