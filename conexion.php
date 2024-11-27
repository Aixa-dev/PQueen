<?php
$servername = "localhost"; // o la IP de tu servidor de base de datos
$username = "root"; // tu nombre de usuario de la base de datos
$password = ""; // tu contraseña de la base de datos
$dbname = "queenfactory"; // el nombre de tu base de datos

// Crear la conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa a la base de datos.";
}

