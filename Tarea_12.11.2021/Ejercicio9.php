<?php 

echo "TAREA EJERCICIO 8";

echo "<br>"; echo "<br>";

echo "Los numeros pares del 1 al 100 son: "; echo "<br>"; echo "<br>";

function arraypares($limite) : array {
  
    $retornaArray = [];
    for ($i=1; $i <= $limite ; $i++) { 
        if ($i % 2 <= 0) {
            $retornaArray[] = $i;
        }            
    }
    return $retornaArray;
 }

 $numsImpares = arraypares(100);

 foreach ($numsImpares as $valor) {
    echo "$valor - ";
    
}

?>