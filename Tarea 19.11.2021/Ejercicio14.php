<?php 

echo "TAREA EJERCICIO 14";

echo "<br>"; echo "<br>";
 
$count = 0;
$numeros = array();
 
while($count < 100){
    ++$count;
    $numeros[] = $count;
}

var_dump($numeros);

echo "<br>";
echo "<br>";

foreach ($numeros as $valor) { 
echo $valor;
echo "<br>";
}
?>