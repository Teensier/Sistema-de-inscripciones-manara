<?php
$servidor ="localhost";
$usuario ="root";
$clave = "";
$Basededatos = "manara";
$conexion = mysqli_connect($servidor, $usuario, $clave, $Basededatos);
if(!$conexion){
    echo"Error de conexion";
}

?>