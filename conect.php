<?php
</p>$conexion = new mysqli("localhost", "root", "", "local_mysql");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}
?>