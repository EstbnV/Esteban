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
	$nomInstructor=$_POST['nombreI'];
	$telefonoI=$_POST['telefonoI'];
	$horarioI=$_POST['horarioI'];

	echo $nomInstructor,$telefonoI,$horarioI;
	
	
	//Sentencia de sql:
	$sql="INSERT INTO instructor (nombre_instructor , telefono, horario) 
		VALUES ('$nomInstructor', '$telefonoI', '$horarioI')";

	
	//Ejecutamos la sentencia de sql:
	$ejecutar= $conn->query($sql);
	
	//Verificamos la ejecucion:
	if(!$ejecutar){
		echo "Hubo algún errror!";
	}else{
		echo "Datos guardados correctamente!<br><a href='registroInstructores.php'>Volver</a>";
	}
?>
	