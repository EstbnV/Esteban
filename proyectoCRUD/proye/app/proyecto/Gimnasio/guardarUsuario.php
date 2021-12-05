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
	$nombre=$_POST['nombre'];
	$nombreUsuario=$_POST['username'];
	$contrasena=$_POST['password'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];
	
	//Sentencia de sql:
	$sql="INSERT INTO usuario (nombre, nombre_usuario, contraseña, tipo_usuario , direccion, correo) 
		VALUES ('$nombre', '$nombreUsuario', '$contrasena','usuario',  '$direccion', '$correo')";
	
	//Ejecutamos la sentencia de sql:
	$ejecutar= $conn->query($sql);
	
	//Verificamos la ejecucion:
	if(!$ejecutar){
		echo "Hubo algún errror!";
	}else{
		echo "Datos guardados correctamente!<br><a href='login.php'>Volver</a>";
	}
	
	if($ejecutar){
		header("Location: login.php");
	}else{
		echo "Insercion no exitosa";
	}
?>
	