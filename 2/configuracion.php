<?php
 #Archivo de configuracion de la base de datos
session_start();
$host = 'localhost';
$port = '5432';
$base_datos = 'buitrera';
$usuario1 = 'postgres';
$pass = '1995';

    
$conexion = pg_connect("host=$host port=$port dbname=$base_datos user=$usuario1 password=$pass");



$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$nacionalidad=$_POST['nacionalidad'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];


$sql="INSERT INTO usuarios(nombre,apellido,nacionalidad,edad,correo) VALUES('$nombre','$apellido','$nacionalidad','$edad','$correo');";
$resultado = pg_query($conexion, $sql);

header('Location: MAPA.html');
?>






  