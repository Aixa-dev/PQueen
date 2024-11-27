<?php
include ("conexion.php");
// archivo procesar_reserva.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $manicure = $_POST['manicure'];
    $diseno = $_POST['diseno'];
    $colores = $_POST['colores'];
    $numero = $_POST['numero'];

    $pestanas = $_POST['pestanas'];
    $cabello = $_POST['cabello'];

    // Aquí puedes guardar los datos en una base de datos o enviarlos por correo
    // Ejemplo de impresión de los datos recibidos:
    echo "<h2>Reserva Confirmada</h2>";
    echo "<p><strong>Servicio Manicure:</strong> $manicure</p>";
    echo "<p><strong>Diseño:</strong> $diseno</p>";
    echo "<p><strong>Número de colores:</strong> $colores</p>";
    echo "<p><strong>Número de uñas:</strong> $numero</p>";

    echo "<p><strong>Extensiones de Pestañas:</strong> $pestanas</p>";
    echo "<p><strong>Tratamiento Capilar:</strong> $cabello</p>";

    // Redirigir o realizar alguna acción después de procesar los datos
}
?>
