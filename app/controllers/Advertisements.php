<?php 

/**
 * advertisements class
 */
class Advertisements
{
	use Controller;

	public function index()
	{

		$this->view('Student','advertisement');
	}

}
