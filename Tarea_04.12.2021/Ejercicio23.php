<?php 

echo "TAREA EJERCICIO 23";

echo "<br>"; echo "<br>";


function tablas($n2) {
    for($n1 = 0; $n1 <= 10; $n1++){
          $mult=$n2*$n1;
        echo "$n2 * $n1 = " . $mult;
        echo "<br>";
        
    }
}

return tablas(18);

?>