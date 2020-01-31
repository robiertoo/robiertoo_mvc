<?php 

namespace Projeto\DB;

use PDO;

class Database
{
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "mvc";
	private $connection = null;

	public function __construct()
	{
		$this->connect();
	}

	public function getConnection()
	{
 		return $this->connection;
	}

	public function connect()
	{
		$this->connection =  new PDO("mysql:host=$this->host;port=3306;dbname=$this->database", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->exec("set names utf8");
        return $this->connection;
	}
}