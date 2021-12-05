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

<DOCTYPE html>
<html>
<head>
	<title>Instructores</title>
	
	<link = rel="stylesheet" href="css/estilos_listaUsuarios.css">
</head>
<body>
<header class="header"> 
            <div class="contenedor">
                <h1 class="logo">"Mameitors"</h1>
                    <span class="icon-menu" id ="btn-menu"> <img src="imagenesgim/icon-menu.png"></span>
                    <nav class="nav" id ="nav">
                        <ul class="menu">
                            <li class="menu_item"><a href="../paginaPrincipal/principal.php" class="menu_link select">Inicio</a></li>
                            <li class="menu_item"><a href="../Gimnasio/listaClases.php" class="menu_link">lista Cursos</a></li>
                            <li class="menu_item"><a href="../paginaAdministracion/admin.php" class="menu_link">pagina principal</a></li>
                            <li class="menu_item"><a href="../Gimnasio/listaUsuarios.php" class="menu_link">lista usuarios</a></li>
                            <li class="menu_item"><a href="../Gimnasio/registroInstructores.php" class="menu_link">registrar Instructores</a></li>
                            <li class="menu_item"><a href="../Gimnasio/registroClases.php" class="menu_link">registrar clase</a></li>
                            <li class="menu_item"><a href="../Gimnasio/cerrar sesion.php" class="menu_link">Cerrar Sesion</a></li>
                        </ul>    
                    </nav>
            </div>
        </header>
	<center>
		<table border = "3">
			<thead>
				<tr>
					<th colspan = "5">Lista de instructores</th>
				</tr>
				
			</thead>
			<tbody>
				<tr>
					<td>Nombre instructor</td>
					<td>Telefono</td>
					<td>Horario</td>
					<td colspan="2">Acciones</td>
				</tr>
			<?php
				include("database.php");
				
				$query="SELECT * FROM instructor";
				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){
			?>
			
				<tr>
					<td><?php echo $row['nombre_instructor']?></td>
					<td><?php echo $row['telefono']?></td>
					<td><?php echo $row['horario']?></td>
					<td><a href="modificarInstructores.php?nombre_instructor=<?php echo $row['nombre_instructor']; ?>">Modificar</a></td>
					<td><a href="eliminarInstructor.php?nombre_instructor=<?php echo $row['nombre_instructor']; ?>">Eliminar</a></td>
				</tr>
			
			<?php
				}
			
			?>
			
				
			</tbody>
		</table>
	</center>
</body>
</html>
