<?php 

echo "TAREA EJERCICIO 10";

echo "<br>"; echo "<br>";

echo "Los multiplos del numero " . $_GET['numero'] . " son: ";

echo "<br>"; echo "<br>";

$numero = $_GET['numero'];

for($num1 = 1; $num1 <= 100; $num1++){
  
    $mult=$numero*$num1;
    echo $mult;
    echo "<br>";
}

?> 

