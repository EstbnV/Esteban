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
	<title>Usuarios</title>
	
	<link = rel="stylesheet" href="css/estilos_listaUsuarios.css">
</head>
<body>
<header class="header"> 
            <div class="contenedor">
                <h1 class="logo">"Mameitors"</h1>
                    <span class="icon-menu" id ="btn-menu"> <img src="imganes/icon-menu.png"></span>
                    <nav class="nav" id ="nav">
                        <ul class="menu">
                            <li class="menu_item"><a href="../paginaPrincipal/principal.php" class="menu_link select">Inicio</a></li>
                            <li class="menu_item"><a href="../paginaAdministracion/admin.php" class="menu_link">pagina principal</a></li>
                            <li class="menu_item"><a href="../Gimnasio/listaInstructores.php" class="menu_link">lista Instructores</a></li>
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
					<th colspan = "9">Lista de clases</th>
				</tr>
				
			</thead>
			<tbody>
				<tr>
					<td>ID</td>
					<td>Clase</td>
					<td>Instructor</td>
					<td>Horas por semana</td>
					<td>Dia/s</td>
					<td>Horarios</td>
					<td>Costo por semana</td>
					<td colspan="2">Acciones</td>
				</tr>
			<?php
				include("database.php");
				
				$query="SELECT * FROM clase";
				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){
			?>
			
				<tr>
					<td><?php echo $row['ID_clase']?></td>
					<td><?php echo $row['nombre_clase']?></td>
					<td><?php echo $row['instructor']?></td>
					<td><?php echo $row['horas_totales']?></td>
					<td><?php echo $row['dia']?></td>
					<td><?php echo $row['horario']?></td>
					<td><?php echo $row['costo']?></td>
					<td><a href="modificarClases.php?ID_clase=<?php echo $row['ID_clase']; ?>">Modificar</a></td>
					<td><a href="eliminarClases.php?ID_clase=<?php echo $row['ID_clase']; ?>">Eliminar</a></td>
				</tr>
			
			<?php
				}
			
			?>
			
				
			</tbody>
		</table>
	</center>
</body>
</html>
