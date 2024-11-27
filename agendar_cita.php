<?php
include 'conexion.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_cliente = $_POST['nombre_cliente'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $servicios =  $_POST['servicio']; // Convierte el array de servicios en una cadena.

    $sql = "INSERT INTO citas (id_cliente, id_servicios, Fecha, Hora_Inicio) VALUES ((select id_cliente from cliente where Nombre = '$nombre_cliente'),(select id_servicios from servicios where Nombre_Servicios = '$servicios'), '$fecha', '$hora')";
    
    if (mysqli_query($conexion, $sql)) {
        echo "Cita agendada con éxito!";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
    
}

?>
