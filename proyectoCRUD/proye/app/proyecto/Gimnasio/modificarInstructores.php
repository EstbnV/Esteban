<!DOCTYPE html>
<html>
    <head>
        <title>Proyecto Gym</title>
    </head>

	<body>
		<!-- Formulario con los datos necesarios para iniciar la sesion y el botón para envíar los datos del formulario-->
		<div align="center">
		
				<?php
				
					$nombre_instructor=$_REQUEST['nombre_instructor'];
					
					include("database.php");
					
					$query="SELECT * FROM intructor WHERE nombre_instructor='$nombre_instructor'";
					$resultado= $conexion->query($query);
					$row=$resultado->fetch_assoc();
				
				?>
				
				<form action="proModifInstructores.php?nombre_instructor=<?php echo $row['nombre_instructor']; ?>" method="POST">
								
					<h2>REGISTRO DE INSTRUCTORES</h2>
					<p>Nombre Instructor: <br>
					<input type="text" name="nombre_instructor" value="<?php echo $row['nombre_instructor']; ?>"></p>
					<p>Telefono: <br>
					<input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"></p>
					<p>Horario: <br>
					<input type="text" name="horario" value="<?php echo $row['horario']; ?>"></p>
										
					<input type="submit" value="Guardar"></p>
			</form>
			
        </div>
		
	
</body>
</html>