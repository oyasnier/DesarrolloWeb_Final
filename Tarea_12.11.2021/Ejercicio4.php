<?php 

echo "TAREA EJERCICIO 4";

echo "<br>"; echo "<br>";

$mult=1;

for($num1 = 1; $num1 <= 20; $num1++){
    $mult=$mult*$num1;

    if ($num1<20) {
        echo "$num1 * ";
    } else { echo "$num1 = "; }

}

echo "$mult";

?>