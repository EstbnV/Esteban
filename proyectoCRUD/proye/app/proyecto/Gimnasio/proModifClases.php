<?php

include("database.php");

	$ID_clase=$_REQUEST['ID_clase'];
	
	$nombre_clase=$_POST['nombre_clase'];
	$instructor=$_POST['instructor'];
	$horas_totales=$_POST['horas_totales'];
	$dia=$_POST['dia'];
	$horario=$_POST['horario'];
	$costo=$_POST['costo'];
	
	//Sentencia de sql:
	$query= "UPDATE `clase` SET `ID_clase` = '".$ID_clase."', `nombre_clase` = '".$nombre_clase."',
			 `instructor` = '".$instructor."', `horas_totales` = '".$horas_otales."',
			 `dia` = '".$dia."', `horario` = '".$horario."', `costo` = '".$costo."' WHERE `ID_clase` = '".$ID_clase."'";
	$ejecutar= $conexion->query($query);
	
	
	//Verificamos la ejecucion:
	if(!$ejecutar){
		header("Location: listaClases.php");
	}else{
		echo "Actualice la pagina para ver los cambios!";
		header("Location: listaClases.php");
	}
	?>