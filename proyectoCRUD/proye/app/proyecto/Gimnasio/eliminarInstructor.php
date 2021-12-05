<?php

include("database.php");
	
	$nombre_instructor = $_REQUEST['nombre_instructor'];
	
	//Sentencia de sql:
	$query="DELETE FROM intructor WHERE nombre_instructor='$nombre_instructor'";
	$ejecutar= $conexion->query($query);
	
	if($ejecutar){
		header("Location: listaInstructores.php");
	}else{
		echo "Eliminacion no exitosa";
	}
	
	?>