<?php 

/**
 * complaints class
 */
class Complaints
{
	use Controller;

	public function index()
	{

		$this->view('Student','complaints');
	}

}
