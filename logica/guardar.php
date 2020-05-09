<?php
require 'conexion.php';
$nombre_usuario = $_POST['uname'];
$clave_nueva = $_POST['psw'];

$sql = "INSERT INTO usuarios (nombre,contraseña) VALUES ('$nombre_usuario','$clave_nueva')";
$resusltado = mysqli_query($conexion,$sql);

?>