<?php 

/**
 * profile class
 */
class Profile
{
	use Controller;

	public function index()
	{

		$this->view('Student','profile');
	}

}
