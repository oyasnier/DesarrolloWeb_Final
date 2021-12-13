<!DOCTYPE html>
<html lang=«en»>
<head>
<meta charset=«UTF-8»/>
<title>Ejercicio Tarea 16</title>
</head>
<body>

<?php 

echo "TAREA EJERCICIO 16";

echo "<br>";

?>

<h1>Ingrese la variable que quiere validar</h1>
<form action="Ejercicio16.php" method="post">
<label for="v1" class="label">Variable:</label>
<input type="string" name="v1"/>
<br />
<br />
<input type="submit" value="Validar"/>
<br />
<br />

<?php

$v1 = $_POST['v1'];

if (empty($v1)) {
    $v1 = "texto en minuscula";
    $v1 = strtoupper($v1);
    echo "<b> $v1 </b>";
} else {
    echo "La variable ingresada es ". "'"  . $v1 . "'";
}

?> 