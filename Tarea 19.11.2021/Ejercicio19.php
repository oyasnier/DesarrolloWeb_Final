<?php 

echo "TAREA EJERCICIO 19";

echo "<br>"; echo "<br>";

function factorial($n)
{
    $fact=1;
    for ($i=1; $i <= $n; $i++) {
        $fact = $fact*$i;
    }
    return $fact;
}

$n=20;
$resultado=factorial($n);

echo "El Factorial de " . $n . "! es " .$resultado;

?>