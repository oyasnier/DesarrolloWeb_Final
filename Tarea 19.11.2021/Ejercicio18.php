<!DOCTYPE html>
<html lang=«en»>
<head>
<meta charset=«UTF-8»/>
<title>Ejercicio Tarea 18</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<?php 

echo "TAREA EJERCICIO 18";

echo "<br>"; echo "<br>";

$frutas = ["Manzana","Naranja","Sandia","Fresa"];
$deportes = ["Futbol","Tenis","Baloncesto","Beisbol"];
$idiomas = ["Español","Ingles","Frances","Italiano"];

?>

<table class="table">
    <thead>
        <tr>
            <th>Frutas</th>
            <th>Deportes</th>
            <th>Idiomas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"> <?php print_r($frutas[0]); ?> </td>
            <td><?php print_r($deportes[0]); ?></td>
            <td><?php print_r($idiomas[0]); ?></td>
        </tr>
        <tr>
        <td scope="row"> <?php print_r($frutas[1]); ?> </td>
            <td><?php print_r($deportes[1]); ?></td>
            <td><?php print_r($idiomas[1]); ?></td>
        </tr>
        <td scope="row"> <?php print_r($frutas[2]); ?> </td>
            <td><?php print_r($deportes[2]); ?></td>
            <td><?php print_r($idiomas[2]); ?></td>
        </tr>


    </tbody>

</table>

</body>
</html>