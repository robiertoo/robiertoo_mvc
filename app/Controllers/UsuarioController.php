<?php 

namespace App\Controllers;

use App\Models\Usuario as user_model;
use App\Views\Usuario as user_view;

class UsuarioController
{
	public function insertUserView()
	{
		try {
			user_view::insertView();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function insertUserModel($pdo, $name, $email)
	{
		try {
			user_model::insertModel($pdo, $name, $email);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function getUsers($pdo)
	{	
		$users = user_model::getUsers($pdo);
		user_view::getUsers($users);
	}

	public function error()
	{
		user_view::error();
	} 
}