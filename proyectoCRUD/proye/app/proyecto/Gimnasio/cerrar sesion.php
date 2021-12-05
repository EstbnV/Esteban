<?php

//inicia la sesion
session_start();
session_unset();
//destruye la sesion
session_destroy();

//regresa a la pagina de login
header("location: login.php")

?>