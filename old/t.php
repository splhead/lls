<?php
// echo $_SERVER['DOCUMENT_ROOT'];
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);

/* Reports for either E_ERROR | E_WARNING | E_NOTICE  | Any Error*/
error_reporting(E_ALL);
// spl_autoload_register(function ($class_name) {
//     include $class_name . '.php';
// });
//require_once '../model/Usuario.php';
// require_once '../DAO/DaoUsuario.php';
// $path = "Db.php";

// print($path);

// include($path);
// echo get_include_path();
// // require_once();
// print("depois");
require("Db.php");

Db::getInstance();

// if(!isset($db)) {
// 	print("zebra");
// }

// $usuario = new Usuario();
// $usuario->setUsuario("84389796291");
// $usuario->setSenha("testedepass");
// $usuario->setTipo("a");

// $DaoUsuario = DaoUsuario::getInstance();
// $DaoUsuario->addUsuario($usuario);

?>