<?php 

/**
 * selectionlist class
 */
class Selectionlist
{
	use Controller;

	public function index()
	{

		$this->view('Student','selectionlist');
	}

}