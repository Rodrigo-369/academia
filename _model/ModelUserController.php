<?php
 namespace ModelUser;

 require_once("../_database/SqlController.php");

 use SQL\Sql;
 use PDO;

 class ModelUserController extends Sql {

        public function credentialUser(array $us){
            $usuario = $this->conn->prepare("SELECT * FROM usuario WHERE usu_nome = :USUARIO AND usu_senha = :SENHA");
            $usuario->bindParam(":USUARIO", $us[0]);
            $usuario->bindParam(":SENHA", $us[1]);
            $usuario->execute();
            $res = $usuario->fetch(PDO::FETCH_ASSOC);

            return $res;
        }


 }
?>