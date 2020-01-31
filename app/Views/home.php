<?php 

namespace App\Views;

class home {
	public function index ()
	{
		echo "<h1>Página Inicial</h1>";
	}

	public function error ()
	{
		echo "<h1>Página não encontrada.</h1>";
	}
}