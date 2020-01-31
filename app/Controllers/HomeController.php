<?php 

namespace App\Controllers;

class HomeController
{
	public function index ()
	{
		\App\Views\Home::index();
	}

	public function error ()
	{
		\App\Views\Home::error();
	}

	public function teste ()
	{
		return date("Y-m-d");
	}
}