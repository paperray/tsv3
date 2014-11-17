<?php

class Authenticate extends \BaseController {

	/**
	 * Display the views of our login page.
	 *
	 * @return Views
	 */
	public function index()
	{
		return View::make('authenticate/login');
	}

	/**
	 * Store a newly authenticated session in storage.
	 *
	 * @return Exceptions
	 */
	public function store()
	{
		$userinfo = Input::all();
		$remember = false;
		
		if($userinfo['remember'] == 1){
			$remember = true;
		}

		try{
			Auth::attempt(array('username' => $userinfo['username'], 'password' => $userinfo['password'] ,'siteid' => $this->siteid), $remember);
			return 1;

		}catch (Exception $e){
		
				return $e->getMessage();
		}
	}

}
