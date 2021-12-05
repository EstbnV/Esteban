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
      
        <!-- Aqui es donde estoy haciendo la barra de menu, header se refiere a la parte superior, es racticamente una lsita cone stilo para darle la fomra de barra
                     nav representa una sección de una página cuyo propósito es proporcionar enlaces de navegación-->
        <header class="header"> 
            <div class="contenedor">
                <h1 class="logo">"Mameitors"</h1>
                    <span class="icon-menu" id ="btn-menu"> <img src="imganes/icon-menu.png"></span>
                    <nav class="nav" id ="nav">
                        <ul class="menu">
                            <li class="menu_item"><a href="" class="menu_link select">Inicio</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Cursos</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Instructores</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Contacto</a></li>
                            <li class="menu_item"><a href="../gimnasio/login.php" class="menu_link">Iniciar sesion</a></li>
                        </ul>    
                    </nav>
            </div>
        </header>

        <div class="banner">
            <img src="imganes/img1.jpg" alt="" class="banner_img">
            <div class="contenedor">
                <h2 class="banner_titulo"> El mejor Gym </h2>
                <p class="banner_txt">El mejor Gym a tu alcance</p>
            </div>
        </div>


        <!-- Estamos haciendo los cuadros con imagenes, para poner la informacion con poco texto 
      la etioqueta section la usamos para representa una sección genérica de un documento. Sirve para determinar qué contenido corresponde a qué parte de un esquema
     -->
        <main class="main">
            <div class="contenedor">
                <section class="info">
                    <article class="info_columna">
                        <img src="imganes/banner.jpg" alt="" class="info_img">
                        <h2 class="info_titulo">Registrate </h2>
                        <p class="info_txt">No dudes e ingresa a tu mejor opcion como gimnasio, te va a ¡encantar!</p>
                    </article>
                    <article class="info_columna">
                        <img src="imganes/img2.jpg" alt="" class="info_img">
                        <h2 class="info_titulo"> Consulta Rutinas</h2>
                        <p class="info_txt">La actividad física es una manera de divertirse con amigos y parientes, disfrutar de actividades al aire libre, mejorar su acondicionamiento físico para practicar un deporte y mantener su independencia</p>
                    </article>
                    <article class="info_columna">
                        <img src="imganes/img3.jpg" alt="" class="info_img">
                        <h2 class="info_titulo">¿Por qué debo hacer ejercicio?</h2>
                        <p class="info_txt"> El ejercicio es una parte importante de un estilo de vida saludable. El ejercicio previene problemas de salud, aumenta la fuerza, aumenta la energía y puede ayudar a reducir el estrés. También puede ayudar a mantener un peso corporal saludable y reducir el apetito.</p>
                    </article>
                </section>
            </div>
        

    <!-- Se mostrra un titulo pequeño, una imagen y una pequeña descripcion para dar info sobre los cursos del gym-->

        <section class="cursos">
            <h2 class="section_titulo">Nuestros Cursos</h2>
            <div class="cursos_columna">
                <img src="imganes/img4.jpg" alt="" class="cursos_img">
                <div class="cursos_descripcion">
                    <h3 class="cursos_titulo">Yoga</h3>
                    <p class="clase_cursos_txt">Deporte perfecto si tu objetivo es fortalecer los músculos, pero también ayuda al sistema inmunológico a hacerse más fuerte.</p>
                </div>
            </div>
            <div class="cursos_columna">
                <img src="imganes/5.jpg" alt="" class="cursos_img">
                <div class="cursos_descripcion">
                    <h3 class="cursos_titulo">Crossfit</h3>
                    <p class="clase_cursos_txt">La alta intensidad de los ejercicios favorece que el Crossfit sea un deporte 'quemagrasas'. </p>
                </div>
            </div>
            <div class="cursos_columna">
                <img src="imganes/img6.png" alt="" class="cursos_img">
                <div class="cursos_descripcion">
                    <h3 class="cursos_titulo">Nutricion</h3>
                    <p class="clase_cursos_txt">Una dieta bien planificada sustentará tu programa de entrenamiento y te ayudará a recuperarte más rápidamente.</p>
                </div>
            </div>
            <div class="cursos_columna">
                <img src="imganes/img7.jpg" alt="" class="cursos_img">
                <div class="cursos_descripcion">
                    <h3 class="cursos_titulo">Gym</h3>
                    <p class="clase_cursos_txt">El entrenamiento físico en general ayuda a reducir el estrés, y el entrenamiento con pesas también lo hace</p>
                </div>
            </div>
        </section>
        </main>

        <!-- Vamos a realizar la parte inferior de la pagina -->
        <footer class="footer">
                <div class="social">
                    <a href="" class="icon-face"> <img src="imganes/face.png"> </a>
                    <a href="" class="icon-insta"> <img src="imganes/insta.png">  </a>
                    <a href="" class="icon-tw"> <img src="imganes/tw.png">  </a>
                </div>
                <p class ="copy"> &copy; ITL. 2021 - Equipo 5</p>
        </footer>

        <script src="js/menu.js"></script>    
    </body>
</html>