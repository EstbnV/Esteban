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
        <link = rel="stylesheet" href="css/estilos.css">
    </head>
	
    <body>
        <!-- Barra de menu -->
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
                            <li class="menu_item"><a href="../Gimnasio/registroInstructores.php" class="menu_link">registrar Instructores</a></li>
                            <li class="menu_item"><a href="../Gimnasio/registroClases.php" class="menu_link">registrar clase</a></li>
                            <li class="menu_item"><a href="../Gimnasio/cerrar sesion.php" class="menu_link">Cerrar Sesion</a></li>
                        </ul>    
                    </nav>
            </div>
        </header>
        <!-- / -->
		
        <div class="banner">
            <img src="Images/administrador.jpg" height=800 width=1367 alt="" class="banner_img">
            <div class="contenedor">
                <h2 class="banner_titulo"> Bienvenido, ADMIN </h2>
            </div>
        </div>


        <!-- Cuadros con imagenes -->
        <main class="main">
            <div class="contenedor">
                <section class="info">
                    <article class="info_columna">
                        <img src="Images/users.jpg" height=250 width=800 alt="" class="info_img">
                        <h2 class="info_titulo"> Gestion de usuarios </h2>
                        <p class="info_txt"> Maneje las cuentas de los usuarios registrados. </p>
                    </article>
                    <article class="info_columna">
                        <img src="Images/instruc.jpg" height=250 width=800 alt="" class="info_img">
                        <h2 class="info_titulo"> Gestion de instructores </h2>
                        <p class="info_txt"> Registre nuevos instructores y administre los ya registrados. </p>
                    </article>
                    <article class="info_columna">
                        <img src="Images/rutinas.jpg" height=250 width=800 alt="" class="info_img" >
                        <h2 class="info_titulo"> Rutinas </h2>
                        <p class="info_txt"> Defina los horarios de las rutinas, el cupo y asigne instructores. </p>
                    </article>
                </section>
				<br> <br> <br> <br> <br> <br> <br> <br>
				<section class="info">
                    <article class="info_columna">
                        <img src="Images/publicidad.png" height=280 width=800 alt="" class="info_img">
                        <h2 class="info_titulo"> Publicidad </h2>
                        <p class="info_txt"> Gestione los elementos publicitarios de la pagina. </p>
                    </article>
                    <article class="info_columna">
                        <img src="Images/suscripcion.jpg" height=280 width=800 alt="" class="info_img">
                        <h2 class="info_titulo"> Suscripciones </h2>
                        <p class="info_txt">Apruebe y maneje las suscripciones de los clientes. </p>
                    </article>
                    <article class="info_columna">
                        <img src="Images/contacto.png" height=280 width=800 alt="" class="info_img" >
                        <h2 class="info_titulo"> Contacto </h2>
                        <p class="info_txt"> Defina o modifique la informacion de contacto de los instructores y la pagina. </p>
                    </article>
                </section>
				<br> <br>
            </div>
		<!-- / -->	
        

        <!-- Pie de pagina -->
        <footer class="footer">
                <div class="social">
                    <a href="" class="icon-face"> <img src="Images/face.png"> </a>
                    <a href="" class="icon-insta"> <img src="Images/insta.png">  </a>
                    <a href="" class="icon-tw"> <img src="Images/tw.png">  </a>
                </div>
                <p class ="copy"> &copy;  ITL. 2021 - Equipo </p>
        </footer>
        <!-- / -->
        <script src="js/menu.js"></script>    
    </body>
</html>