<?php 

echo "TAREA EJERCICIO 22";

echo "<br>"; echo "<br>";

$email  = $_GET['correo'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "La direccion de correo electronico ". " '" .$email . "' " . " es valida";}

    else { echo "Esta dirección de correo electronico no es valida";
 
}

?>