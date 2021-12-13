<?php 

echo "TAREA EJERCICIO 3";

echo "<br>"; echo "<br>";

for($num1 = 1; $num1 <= 30; $num1++) {
    print $num1 ." " ."al cuadrado es igual a ". " " . $num1 * $num1 .".";
        if ((($num1 * $num1) % 2) > 0) {
            $resultado = "IMPAR";} else { $resultado = "PAR";}

    echo " El resultado es un numero". " ". $resultado;
    echo "<br />"; 
}

?>