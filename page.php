<?php $get_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<?php get_header(); ?>

<?php 
//Si la url contiene la palabra ventas, se llama al archibo de prppiedades en venta
if(strpos($get_uri, 'ventas')){
    require_once 'includes/ventas.php';
}else if(strpos($get_uri, 'arriendos')){
    //Si la url contiene la palabra arriendos, se llama al archibo de prppiedades en venta
    require_once 'includes/arriendos.php';
}
 ?>

<?php get_footer(); ?>