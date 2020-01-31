<?php 

namespace App;

$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$query = parse_url($url, PHP_URL_QUERY);

// echo $query;//right here

switch($path){
	case "/":
		$home->index();
		break;
	case "/cadastrar_usuario":
		$user->insertUserView();
		break;
	case "/exibe_usuarios":
		$user->getUsers($pdo);
		break;
	default:
		$home->error();
		break;
}
