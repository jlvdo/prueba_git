<?php
echo "<h1>-Hola Mundo- </h1>";
echo "<br>";
echo"Comenzando bloque para conexion a mysql  jesus<br>";
$enlace=mysql_connect('db','root','1234');
if (!$enlace){
    die('No pudo conectarse: '. mysql_error());
}
echo 'Comectado satisfactoriamente';
mysql_close($enlace);
?>