<?php

class BaseController extends Controller {
	
	/*
	* All of the siteID of TS network should be add here
	*/
	protected $siteid = array(0,1,2,3,4,5,6,7,9,10,11,12,13,14,15,17,18,19,20,22,26,27,29,34,35,36,37,38,44,46,47,48,50,51,53,54,56,58);
	
	public function __construct()
	{
		if (Auth::check()){
			return Redirect::to('login')->with('message', 'You need to login first in order to access our members area');
		}
	}
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
