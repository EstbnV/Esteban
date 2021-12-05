<?php

include("database.php");
	
	$id=$_REQUEST['id'];
	$nombre=$_POST['nombre'];
	$usuario=$_POST['username'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];

	echo $id,$nombre,$usuario,$direccion,$correo;
	
	//Sentencia de sql:
	/*$query="UPDATE usuario SET ID='".$id."', Nombre ='".$nombre."',
	 Usuario='".$usuario."', Direccion='".$direccion."',
	  Correo='".$correo."' WHERE id='".$id."'";*/

	$query= "UPDATE `usuario` SET `ID` = '".$id."', `nombre` = '".$nombre."',
 `nombre_usuario` = '".$usuario."', `direccion` = '".$direccion."',
  `correo` = '".$correo."' WHERE `ID` = '".$id."'";

	$ejecutar= $conexion->query($query);
	
	if($ejecutar){
		header("Location: listaUsuarios.php");
	}else{
		echo "Insercion no exitosa";
	}
	
	?>
	