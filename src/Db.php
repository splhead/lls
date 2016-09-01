<?php

class Db {
	const DB_HOST = 'db';
	const DB_USER = 'root';
	const DB_PASSWORD = 'p455w0rd';
	const DB_NAME = 'lls';
	const CHARSET = 'utf8';

	public static $instance;

	private function __construct() {
		//
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			try {
				$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);
				$dsn = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . "; charset=" . self::CHARSET . ";";
				print($dsn);
				self::$instance = new PDO($dsn, self::DB_USER, self::DB_PASSWORD, $opcoes);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
			} catch (PDOException $e) {
				echo 'Erro ao conectar com o Banco de Dados: ' . $e->getMessage();
			}
		}

		return self::$instance;
	}
}

?>