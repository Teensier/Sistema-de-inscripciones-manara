<?php
require 'conexion.php';
$nombrealumno = $_POST['aname'];
$apellidoalumno = $_POST['apellido'];
$edad = $_POST['edad'];
$fechainscripcion = $_POST['fecha'];
$npadre = $_POST['npadre'];
$nmadre = $_POST['nmadre'];
$ntelefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO alumnos (Nombre_Alumno,apellido_alumno,edad,Fecha_inscripcion,Nombre_padre,Nombre_madre,Numero_telefono,Correo) VALUES ('$nombrealumno','$apellidoalumno','$edad','$fechainscripcion','$npadre','$nmadre','$ntelefono','$email')";
mysqli_query($conexion,$sql);
header("location:Alta_alumnos.html");

?>