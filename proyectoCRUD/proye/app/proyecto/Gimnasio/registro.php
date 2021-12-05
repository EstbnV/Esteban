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
<header class="header"> 
            <div class="contenedor">
                <h1 class="logo">"Mameitors"</h1>
                    <span class="icon-menu" id ="btn-menu"> <img src="imagenesgim/icon-menu.png"></span>
                    <nav class="nav" id ="nav">
                        <ul class="menu">
                            <li class="menu_item"><a href="../paginaPrincipal/principal.php" class="menu_link select">Inicio</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Cursos</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Instructores</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Contacto</a></li>
							<li class="menu_item"><a href="../Gimnasio/login.php" class="menu_link">Iniciar sesion</a></li>
                        </ul>    
                    </nav>
            </div>
        </header>
		
		<br>
		<br>
		<br>
		<!-- Formulario con los datos necesarios para iniciar la sesion y el botón para envíar los datos del formulario-->
		<div align="center">
				<form action="guardarUsuario.php" method="POST">
					<h2>GEGISTRO</h2>
					<p>Nombre: <br>
					<input type="text" name="nombre"></p>
					<p>Nombre de usuario: <br>
					<input type="text" name="username"></p>
					<p>Password: <br>
					<input type="password" name="password"></p>
					<p>Direccion: <br>
					<input type="text" name="direccion"></p>
					<p>Correo: <br>
					<input type="email" name="correo"></p>
					
					<input type="submit"  id="alv" value="Registrarse"></p>
			</form>
			
        </div>
		
	
</body>
</html>