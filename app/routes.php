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

Route::controller('users', 'UsersController');




//Ugly looking data routes
Route::pattern('id', '[0-9]+');

Route::get('listCounties/{id}', function($id)
{
    $counties = DB::table('counties')->where('stateId', '=', $id)->get();
    
    return json_encode($counties);
});
