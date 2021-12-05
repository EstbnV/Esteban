<?php
 session_start();
if( isset($_SESSION['rol'])){
	//si el rol es administrador
	if($_SESSION['rol'] == 'admin'){
      header("location: ../paginaAdministracion/admin.php");
        } 
	
}else{
    header("location: ../Gimnasio/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pagina Usuarios</title>
      <!--  <link href="https://file.myfontastic.com/SH7cHHYegyM2pzFGpr4VS8/icons.css" rel="stylesheet"> -->
        <meta name="viewport" content="width=device=width, user-scalable=no, initial-scale=1.0,  maximum-scale=1.0, minimum-scale=1.0">
        <link = rel="stylesheet" href="estilos/estilos.css">
        <link = rel="stylesheet" href="estilos/calendar.css">
       
       

    </head>
    <body>
      
        <!-- Aqui es donde estoy haciendo la barra de menu, header se refiere a la parte superior, es racticamente una lsita cone stilo para darle la fomra de barra
                     nav representa una sección de una página cuyo propósito es proporcionar enlaces de navegación-->
        <header class="header"> 
            <div class="contenedor">
                <h1 class="logo">"Mameitors"</h1>
                    <span class="icon-menu" id ="btn-menu"> <img src="img/icon-menu.png"></span>
                    <nav class="nav" id ="nav">
                        <ul class="menu">
                            <li class="menu_item"><a href="../paginaPrincipal/principal.php" class="menu_link select">Inicio</a></li>
                            <li class="menu_item"><a href="../Gimnasio/cerrar sesion.php" class="menu_link">Cerrar Sesion</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Consultar informacion</a></li>
                            <li class="menu_item"><a href="" class="menu_link">Consultar calendario de actividades</a></li>
                        </ul>    
                    </nav>
            </div>
        </header>

        <div class="banner">
            <img src="img/gym.jpg" alt="" class="banner_img">
            <div class="contenedor">
                <h2 class="banner_titulo"> ¡Bienvenido! </h2>
                <p class="banner_txt">estamos para servirle</p>
            </div>
        </div>


        <!-- Estamos haciendo los cuadros con imagenes, para poner la informacion con poco texto 
      la etioqueta section la usamos para representa una sección genérica de un documento. Sirve para determinar qué contenido corresponde a qué parte de un esquema
     -->
        <main class="main">
            <div class="contenedor">
                <section class="info">
                    <article class="info_columna">
                        <img src="img/seguro.jpg" alt="" class="info_img">
                        <h2 class="info_titulo">Total transparencia </h2>
                        <p class="info_txt">Dentro de la pagina podrás obtener toda la información de tu supscripcion, además, ¡tus futuros pagos! </p>
                    </article>
                    <article class="info_columna">
                        <h2 class="info_titulo">Calendario de Actividades</h2>
                        <p class="info_txt">queremos que veas tu gran progreso, y es por ello que ponemos a tu dispocisión las actividades que haz realizado durante el año. Asi como, las que estas por realizar.</p>
                        <img src="img/calendario.jpg" alt="" class="info_img">
                        </article>
                    <article class="info_columna">
                        <img src="img/la_roca.jpg" alt="" class="info_img">
                        <h2 class="info_titulo">Dwayne Johnson</h2>
                        <p class="info_txt">"El éxito comienza con auto-disciplina, empieza contigo mismo”.</p>
                    </article>
                </section>
            </div>
        

    <!-- Se mostrra un titulo pequeño, una imagen y una pequeña descripcion para dar info sobre los cursos del gym-->
    </main>        
    <div id="cal"> 
    <div class="header"> 
 <span class="left button" id="prev"> &lang; </span> 
<span class="left hook"></span> 
<span class="month-year" id="label"> Mayo 2020 </span> 
<span class="right hook"></span> 
<span class="right button" id="next"> &rang; </span>
    </div> 
    <table id="days"> 
 <td>Domingo</td> 
<td>Lunes</td> 
<td>Martes</td> 
<td>Miercoles</td> 
<td>Jueves</td> 
<td>Viernes</td> 
<td>Sabado</td>
 
    </table> 
    <div id="cal-frame"> 
 <table class="curr"> 
    <tbody> 
        <tr><td class="nil"></td><td class="nil"></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr> 
        <tr><td>6</td><td>7</td><td>8</td><td class="today">9</td><td>10</td><td>11</td><td>12</td></tr> 
        <tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr> 
        <tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr> 
        <tr><td>27</td><td>28</td><td>29</td><td>30</td><td class="nil"></td><td class="nil"></td><td class="nil"></td></tr> 
    </tbody> 
</table>
 
    </div> 
</div>


        <!-- Vamos a realizar la parte inferior de la pagina -->
        <footer class="footer">
                <div class="social">
                    <a href="" class="icon-face"> <img src="img/face.png"> </a>
                    <a href="" class="icon-insta"> <img src="img/insta.png">  </a>
                    <a href="" class="icon-tw"> <img src="img/tw.png">  </a>
                </div>
                <p class ="copy"> &copy; ITL. 2021 - Equipo </p>
        </footer>

        <script src="js/menu.js"></script>    
    </body>
</html>