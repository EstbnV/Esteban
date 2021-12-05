<?php

include("database.php");
	
	$id=$_REQUEST['id'];
	
	//Sentencia de sql:
	$query="DELETE FROM usuario WHERE id='$id'";
	$ejecutar= $conexion->query($query);
	
	if($ejecutar){
		header("Location: listaUsuarios.php");
	}else{
		echo "Eliminacion no exitosa";
	}
	
	?>