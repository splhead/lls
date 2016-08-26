<?php


class Db {
	const DB_HOST = "db";
	const DB_USER = "root";
	const DB_PASSWORD = "gardenal99";
	//const DB_PASSWORD = "p455w0rd";
	const DB_NAME = "lls";

	public static $instance;

	private function __construct() {
		//
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			try {
				$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
				print($dsn);
				self::$instance = new PDO($dsn, DB_USER, DB_PASSWORD);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
			} catch (PDOException $e) {
				echo 'Erro ao conectar com o Banco de Dados: ' . $e->getMessage();
			}
		}

		retrun self::$instance;
	}
}

?>