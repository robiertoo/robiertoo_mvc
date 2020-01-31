<?php 

namespace App\Models;

class Usuario
{
	private $id;
	private $nome;
	private $email;

	public function insertUserModel ($pdo, $nome, $email)
	{
		$query = "
			INSERT INTO usuario (nome, email) 
			VALUES (:nome, :email)";
		$insert = $pdo->prepare($query);
		$dados = array(
			":nome" => "$nome",
			":email" => "$email"
		);

		$insert->execute($dados);
		if($insert > 0) echo "Cadastrado com sucesso!";
	}

	public function getUsers ($pdo)
	{
		$users = $pdo->query("
			SELECT id, nome, email
			FROM usuario
		");

		return $users;
	}
}