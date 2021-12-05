<!DOCTYPE html>
<html>
    <head>
        <title>Proyecto Gym</title>
    </head>

	<body>
		<!-- Formulario con los datos necesarios para iniciar la sesion y el botón para envíar los datos del formulario-->
		<div align="center">
		
				<?php
					
					$ID_clase = $_REQUEST['ID_clase'];
					
					include("database.php");
					
					$query="SELECT * FROM clase WHERE ID_clase = '$ID_clase' ";
					$resultado= $conexion->query($query);
					$row=$resultado->fetch_assoc();
				
				?>
				
				<form action="proModifClases.php?ID_clase=<?php echo $row['ID_clase']; ?>" method="POST">
								
					<h2>GEGISTRO DE CLASES O CURSOS</h2>
					<p>Nombre de clase: <br>
					<input type="text" name="nombre_clase" value="<?php echo $row['nombre_clase']; ?>"></p>
					<p>Instructor: <br>
					<input type="text" name="instructor" value="<?php echo $row['instructor']; ?>"></p>
					<p>Horas totales: <br>
					<input type="text" name="horas_totales" value="<?php echo $row['horas_totales']; ?>"></p>
					<p>Dia: <br>
					<input type="text" name="dia" value="<?php echo $row['dia']; ?>"></p>
					<p>Horario: <br>
					<input type="text" name="horario" value="<?php echo $row['horario']; ?>"></p>
					<p>Costo: <br>
					$ <input type="text" name="costo" value="<?php echo $row['costo']; ?>"></p>
										
					<input type="submit" value="Guardar"></p>
			</form>
			
        </div>
		
	
</body>
</html>