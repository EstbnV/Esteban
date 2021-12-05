<?php
	
	$dbhost	= "localhost";	   // localhost or IP
	$dbuser	= "root";		  // database username
	$dbpass	= "";		     // database password
	$dbname	= "gym";    // database name

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
				// Check connection
			if (!$conn) {
				die("Conexion fallida: " . mysqli_connect_error());
			} 	
	
	//Recuperar las variables:
	$nombreClase=$_POST['nombreclase'];
	$nombreInstructor=$_POST['instructor'];
	$horasTotales=$_POST['horastotales'];
	$dia=$_POST['dia'];
	$horario=$_POST['horario'];
	$costo=$_POST['costo'];
	
	//Sentencia de sql:
	$sql="INSERT INTO clase (nombre_clase, instructor, horas_totales, dia, horario, costo) 
		VALUES ('$nombreClase', '$nombreInstructor', '$horasTotales', '$dia', '$horario', '$costo')";
	
	//Ejecutamos la sentencia de sql:
	$ejecutar= $conn->query($sql);
	
	//Verificamos la ejecucion:
	if(!$ejecutar){
		echo "Hubo algún errror!";
	}else{
		echo "Datos guardados correctamente!<br><a href='RegistroClases.php'>Volver</a>";
	}
?>
	