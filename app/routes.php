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

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/rolldice/{guess?}', function($guess)
{	
	$rand = rand(1,6);

	$message = $rand == $guess ? "Way to go!" : "Wrong guess";

	$data = array(
		'guess' => $guess,
		'rand' => $rand,
		);

	echo $message;

	return View::make('roll-dice')->with($data);
});



