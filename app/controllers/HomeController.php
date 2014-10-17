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
  		// start the session - presupposes that the page will always require the http session
  		session_start();
  		/*
  		// call class Queries
  		require_once('queries.php');
  		$queries = new Queries; 
  		*/
  		
  		// call the model
  		$postings = Posting::all(); 

		// assemble all data for the view...
		$viewData = ['postings' => $postings];  

		// pass 'home' and viewData array to the View...
		return View::make('home', $viewData);
	}

}
