<?php


class Conexao {
	const DB_HOST = "localhost";
	const DB_USER = "root";
	const DB_PASSWORD = "p455w0rd";
	const DB_NAME = "lls";

	public static $instance;

	private function __construct() {
		//
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			try {
				self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);				
			} catch (PDOException $e) {
				echo 'Erro ao conectar com o Banco de Dados: ' . $e->getMessage();
			}
		}

		retrun self::$instance;
	}
}

?>