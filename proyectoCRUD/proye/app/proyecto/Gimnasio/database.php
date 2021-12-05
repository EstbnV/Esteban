<?php

$host ="gymservidor";
$usuario ="root";
$clave ="MYSQL_PASSWORD";
$bd ="gym";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
	echo "Conexion exitosa!";
}else{
	echo "No se pudo conectar";
}

?>