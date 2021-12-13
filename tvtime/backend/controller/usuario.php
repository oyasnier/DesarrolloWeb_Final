<?php 

class UsuarioController
{

    //Acceso al Backend

     public function loginController()
     {
         //validamos que recibimos algo
         if(isset($_POST["ingresar"]))
        {             
            $datosController = array("usuario"=> $_POST["usuarioIngreso"], 
            "password" => $_POST["passwordIngreso"]);

            $respuesta = UsuarioModel::loginModel($datosController,"usuario");

        //var_dump($respuesta);

       if ($respuesta == TRUE) 
       {
            if($respuesta->nick_user == $_POST["usuarioIngreso"]
            && $respuesta->password_usuario == $_POST["passwordIngreso"])

            {
               
                    $_SESSION['validar'] = true;
                    $_SESSION['usuarioID'] = $respuesta->id_usuario;
                    $_SESSION['usuarioNombre'] = $respuesta->nombre_usuario;
                    

                    header("location:dashboard");
            }
            else { 
                echo "<b>Password Incorrecto</b>"; 
            } 
      
        }

     }

    }

}
?>
