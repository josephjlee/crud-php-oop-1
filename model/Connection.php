<?php

abstract class Connection{

	private $user;
	private $password;
	private $hostname;
	private $database;
	private static $pdo;

	public function __construct(){
		$this->user = "root";
		$this->password = "";
		$this->hostname = "localhost";
		$this->database = "crud";
	}

	public function connect(){

		try{
			if (is_null(self::$pdo)) {
				self::$pdo = new PDO("mysql:host={$this->hostname};dbname={$this->database}", $this->user, $this->password);
			}

			return self::$pdo;
			
		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
	}
}

?>