<?php
//inicia la sesion
session_start();


if( isset($_SESSION['rol'])){
	//si el rol es administrador
	if($_SESSION['rol'] == 'usuario'){
        header("location: ../paginaUsuario2.0/paginaUsuarios.php");
        //si el rol es usuario normal
        }else if($_SESSION['rol'] == 'admin'){
        header("location: ../paginaAdministracion/admin.php");
        }
	exit();
}

include("database.php");
	
    	//se almacenan las variables insertadas
    $usuario = $_POST["username"];

    $pass = $_POST["password"];

	
	//Sentencia de sql:
	$query="SELECT * FROM `usuario` WHERE 
    nombre_usuario = '".$usuario."' and contraseña = '".$pass."'";

    $ejecutar= mysqli_query($conexion, $query);
    
    $rows = mysqli_fetch_array($ejecutar);
   
    $nr = mysqli_num_rows($ejecutar);

    echo "no se que pedo";
    
    //si hay una columna significa que existe un usuario
    if($nr == 1){ 

    //se le asigna el rol a la sesion
    echo $rows[4];

    $_SESSION['rol'] = $rows[4];
    
	//si el rol es administrador
	if($_SESSION['rol'] == 'usuario'){
	header("location: ../paginaUsuario2.0/paginaUsuarios.php");
	//si el rol es usuario normal
	}else if($_SESSION['rol'] == 'admin'){
	header("location: ../paginaAdministracion/admin.php");
    }
    
	
	}else{
        header("location: login.php");
	}

	?>