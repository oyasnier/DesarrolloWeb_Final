<?php 

require_once "model/conexion.php";

class UsuarioModel {

    public static function loginModel($datosModel,$tabla)
    { 
        //Instanciamos la conexion a la BD
        $database = new Conexion();
        $db = $database->conectar();

        $stmt = $db->prepare("SELECT id_usuario, nick_user, nombre_usuario, email_usuario, password_usuario
         FROM $tabla WHERE nick_user = :usuario");

        $stmt->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);

        $stmt ->execute();

        $resultado = $stmt->fetch(PDO::FETCH_OBJ);

        return $resultado;

        //cerramos la conexion
        $stmt = null;

    }
}



?>