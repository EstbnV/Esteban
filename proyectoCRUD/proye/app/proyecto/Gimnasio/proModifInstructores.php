<?php

include("database.php");
	
	$nombre_instructor=$_POST['nombre_instructor'];
	$telefono=$_POST['telefono'];
	$horario=$_POST['horario'];
	
	echo $nombre_instructor,$telefono,$horario;
	
	//Sentencia de sql:
	
	$query= "UPDATE `instructor` SET `nombre_instructor` = '".$nombre_instructor."', `telefono` = '".$telefono."',
 `horario` = '".$horario."' WHERE `nombre_instructor` = '".$nombre_instructor."'";

	$ejecutar= $conexion->query($query);
	
	if($ejecutar){
		header("Location: listaInstructores.php");
	}else{
		echo "Insercion no exitosa";
	}
	
	?>