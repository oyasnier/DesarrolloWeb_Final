<?php 

echo "TAREA EJERCICIO 13";

echo "<br>"; echo "<br>";

$dir_ip = $_SERVER['REMOTE_ADDR'];
echo "La direccion IP del Usuario es - ".$dir_ip;
echo "<br>";
echo "<br>";

$navegador = $_SERVER['HTTP_USER_AGENT'];

function getBrowser($navegador){

if(strpos($navegador, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($navegador, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($navegador, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($navegador, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($navegador, 'Opera') || strpos($navegador, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($navegador, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($navegador, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($navegador, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No hemos podido detectar su navegador';
}

$nav = getBrowser($navegador);
 
echo "El navegador con el que estás visitando esta web es: ".$nav;
?>

<script> 
<?php 
if ($nav == 'Firefox') {
    echo 'confirm("En Hora Buena")';
}
else {
    echo 'confirm("Tu Navegador no es Firefox")';
}
?>
</script>



