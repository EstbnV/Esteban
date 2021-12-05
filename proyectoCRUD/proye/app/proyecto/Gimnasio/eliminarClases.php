<?php

include("database.php");
	
	$id=$_REQUEST['ID_clase'];
	
	//Sentencia de sql:
	$query="DELETE FROM clase WHERE ID_clase='$id'";
	$ejecutar= $conexion->query($query);
	
	if($ejecutar){
		header("Location: listaClases.php");
	}else{
		echo "Eliminacion no exitosa";
	}
	
	?>