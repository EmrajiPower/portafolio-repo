<?php
$server = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "portafolio";

// Tablas
$nombre_tabla = "soporte";

// Conexión
$conexion = new mysqli($server,$usuario,$contrasena,$bd);

if ($conexion->connect_error) {
  die("<p>Error, Sin conexión a la base de Datos ".$nombre_tabla);
}

?>
