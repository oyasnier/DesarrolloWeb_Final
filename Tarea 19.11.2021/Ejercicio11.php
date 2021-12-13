<!DOCTYPE html>
<html lang=«en»>
<head>
<meta charset=«UTF-8»/>
<title>Ejercicio Tarea 11</title>
</head>
<body>

<?php 

echo "TAREA EJERCICIO 11";

echo "<br>";

?>

<h1>Ingrese el numero a validar</h1>
<form action="Ejercicio11.php" method="post">
<label for="n1" class="label">Numero:</label>
<input type="number" name="n1" required/>
<br />
<br />
<input type="submit" value="Validar"/>
<br />
<br />

<?php

$evaluacion = array();

if($_POST){
$n1 = $_POST['n1'];

for($n2 = 1; $n2 <= $n1; $n2++){
    $resultado = $n1 / $n2;
    print $n1 ." " ."dividido entre ". " " . $n2 . " " . "es igual a " . $resultado . " ";
    echo "<br>";
    
        $evaluacion[] = $resultado;
        var_dump($evaluacion);
    }
    
} 

foreach ($evaluacion as $valor) {
    if ((is_int($valor) == true) && ($valor != $n1)) {
        $enteros[] = $valor;
       
    }
    }

    //var_dump($enteros); echo "<br>"; 
    echo array_sum($enteros);
    echo "<br>"; 
    echo "<br>"; 

    if (array_sum($enteros) == $n1) {
        echo "EL NUMERO ES BUENO";
    } else {
        echo "EL NUMERO NO ES BUENO";
    }
?>

</form>
</body>

</html>
