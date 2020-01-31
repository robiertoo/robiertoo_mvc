<?php 

require_once '../vendor/autoload.php';

$database = new \Projeto\DB\Database;
$home = new \App\Controllers\HomeController;
$user = new \App\Controllers\UsuarioController;

$pdo = $database->getConnection();

require_once '../app/routes.php';
