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
        <link = rel="stylesheet" href="css/estilos3.css">

    </head>

	<body>
	<header class="header"> 
            <div class="contenedor">
                <h1 class="logo">"Mameitors"</h1>
                    <span class="icon-menu" id ="btn-menu"> <img src="imganes/icon-menu.png"></span>
                    <nav class="nav" id ="nav">
                        <ul class="menu">
                            <li class="menu_item"><a href="../paginaPrincipal/principal.php" class="menu_link select">Inicio</a></li>
                            <li class="menu_item"><a href="../Gimnasio/listaClases.php" class="menu_link">lista Cursos</a></li>
                            <li class="menu_item"><a href="../Gimnasio/listaInstructores.php" class="menu_link">lista Instructores</a></li>
                            <li class="menu_item"><a href="../Gimnasio/listaUsuarios.php" class="menu_link">lista usuarios</a></li>
                            <li class="menu_item"><a href="../paginaAdministracion/admin.php" class="menu_link">pagina principal</a></li>
                            <li class="menu_item"><a href="../Gimnasio/registroClases.php" class="menu_link">registrar clase</a></li>
                            <li class="menu_item"><a href="../Gimnasio/cerrar sesion.php" class="menu_link">Cerrar Sesion</a></li>
                        </ul>    
                    </nav>
            </div>
        </header>
		<br>
		<br>
		<br>
		<br>
		
		<!-- Formulario con los datos necesarios para iniciar la sesion y el botón para envíar los datos del formulario-->
		<div align="center">
				<form action="guardarInstructores.php" method="POST">
					<h2>GEGISTRO DE INSTRUCTORES</h2>
					<p>Nombre: <br>
					<input type="text" name="nombreI"></p>
					<p>Telefono: <br>
					<input type="text" name="telefonoI"></p>
					<p>Horario: <br>
					<input type="text" name="horarioI"></p>
										
					<input type="submit"  id="alv" value="Guardar"></p>
			</form>
			
        </div>
		
	
</body>
</html>