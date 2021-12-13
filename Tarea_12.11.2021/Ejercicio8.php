<?php 

echo "TAREA EJERCICIO 7";

echo "<br>"; echo "<br>";

$fact=1;

echo "El factorial de 5 es: 5! = ";

for($n = 5; $n >= 1; $n--){
    $fact=$fact*$n;

    if ($n>1) {
        echo "$n * ";
    } else { echo "$n = "; }

}

echo $fact;

?>
