/*Este scrpt es para que al presionar el menu de los 3puntitos, se despliegue las opciones*/ 
/*Cuando de click en los  botones, se guardara su id en la variable btnMenu, con el parametro btn-menu(id)*/
var btnMenu = document.getElementById('btn-menu');
var nav = document.getElementById('nav');


/*Cuando haga el evento click, se creara una la funcion*/
btnMenu.addEventListener('click', function()
{
    /*A nav se le crea una clase llamda mostrar*/
    /*Mostrar esta en css, lo que hacemos es que escondemos nav, y caundo se de click enla clase msotrar ponemos left 0; regresando el nav a su posicion, esto 
    crea un efecto */
    nav.classList.toggle('mostrar');

}
)