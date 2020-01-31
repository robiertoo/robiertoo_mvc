<?php 

namespace App\Views;

class Usuario{
	public function olar ()
	{
		echo "olar";
	}

	public function getUsers ($users){
		foreach ($users as $user) {
			$user_id = $user['id'];
			$user_nome = $user['nome'];
			$user_email = $user['email'];

			echo "$user_id - $user_nome - $user_email <br>";
		}
	}

	public function insertView ()
	{
		require_once "templates/insert_user.phtml";
	}
}