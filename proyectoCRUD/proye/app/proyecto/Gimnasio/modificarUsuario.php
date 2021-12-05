<?php
 session_start();
if( isset($_SESSION['rol'])){
	//si el rol es administrador
	if($_SESSION['rol'] == 'usuario'){
        header("location: ../paginaUsuario2.0/paginaUsuarios.php");
        } 

}else{
    header("location: ../Gimnasio/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Proyecto Gym</title>
      <!--  <link href="https://file.myfontastic.com/SH7cHHYegyM2pzFGpr4VS8/icons.css" rel="stylesheet"> -->
        <meta name="viewport" content="width=device=width, user-scalable=no, initial-scale=1.0,  maximum-scale=1.0, minimum-scale=1.0">
        <link = rel="stylesheet" href="css/estilos2.css">

    </head>
<body background="imagenesgim/gim2.jpg">
		
		<br>
		<br>
		<br>
		<!-- Formulario con los datos necesarios para iniciar la sesion y el botón para envíar los datos del formulario-->
		<div align="center">
				
				<?php
				
					$id=$_REQUEST['id'];
					include("database.php");
					
					$query="SELECT * FROM usuario WHERE id='$id'";
					$resultado= $conexion->query($query);
					$row=$resultado->fetch_assoc();
			    ?>
				
			<form action="proModifUsuar.php?id=<?php echo $row['ID']; ?>" method="POST">
				
					<h2>Datos del usuario: </h2>
					<p>Nombre: <br>
					<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" ></p>
					<p>Nombre de usuario: <br>
					<input type="text" name="username" value="<?php echo $row['nombre_usuario']; ?>"></p>
					<p>Direccion: <br>
					<input type="text" name="direccion" value="<?php echo $row['direccion']; ?>"></p>
					<p>Correo: <br>
					<input type="email" name="correo" value="<?php echo $row['correo']; ?>"></p>
					
					<input type="submit" value="Guardar"></p>
			</form>
			
        </div>
		
	
</body>
</html>