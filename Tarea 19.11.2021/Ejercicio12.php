<?php 

echo "TAREA EJERCICIO 12";

echo "<br>"; echo "<br>";

$enteros = [10,20,30,40,50];

for ($i=0; $i < count($enteros); $i++) { 
    echo $enteros[$i];
    echo "<br>";
}
echo "<br>";

$contador = 0;

    foreach ($enteros as $valor) {       
       echo "[$contador] => $valor";
       echo "<br>";
       $contador++;
    }

    echo "<br>"; 

    if (array_search('20', $enteros) !==false)
    echo "NUMERO ENCONTRADO EN ARRAY";
    else
    echo "NUMERO NO ENCONTRADO EN ARRAY";

    

?>