<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}


	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showLogin() 
	{
		return View::make('login');
	}

	public function doLogin() 
	{	
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
			Session::flash('loginGood', 'User logged in successfully. Welcome!');
			return Redirect::intended('/');
		}
		else
		{
			// login failed
			Session::flash('loginBad', 'Invalid login');
			return Redirect::back()->withInput();
			
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showLogin');	
	}
}