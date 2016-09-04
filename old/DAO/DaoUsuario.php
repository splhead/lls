 <?php

require_once '../model/Usuario.php'
require_once '../Db.php'
   
  class DaoUsuario {
   
      public static $instance;
   
      private function __construct() {
          //
      }
   
      public static function getInstance() {
          if (!isset(self::$instance))
              self::$instance = new DaoUsuario();
   
          return self::$instance;
      }

      public function addUsuario(Usuario $usuario) {
          try {
            $sql = "INSERT INTO usuario (
               usuario,
               senha,
               tipo)
               VALUES (
               :usuario,
               :senha,
               :tipo)";

            $p_sql = Db::getInstance()->prepare($sql);

            $p_sql->bindValue(":usuario", $usuario->getUsuario());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":tipo", $usuario->getTipo());

            return $p_sql->execute();
          } catch (Exception $e) {
            print "Erro: " . $e->getMessage();
          }
      }


?>