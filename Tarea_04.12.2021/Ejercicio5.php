<?php 

echo "TAREA EJERCICIO 5";

echo "<br>"; echo "<br>";

echo "La tabla de multiplicar del numero " . $_GET['numero'] . " es: ";

echo "<br>"; echo "<br>";

$numero = $_GET['numero'];

for($num1 = 1; $num1 <= 10; $num1++){
    $mult=$numero*$num1;
    echo "$numero * $num1 = " . $mult;
    echo "<br>";
    
}

?> 

