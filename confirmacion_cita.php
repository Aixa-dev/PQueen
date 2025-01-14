<?php
// Comprobar si los datos necesarios están presentes
if (isset($_GET['servicio']) && isset($_GET['fecha']) && isset($_GET['hora'])) {
    $servicio = $_GET['servicio'];
    $fecha = $_GET['fecha'];
    $hora = $_GET['hora'];
} else {
    echo "No se proporcionaron datos para la confirmación.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Cita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf0f6;
            text-align: center;
            padding: 50px;
        }
        .confirmacion {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #ff66a3;
        }
        p {
            color: #333;
            font-size: 18px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff99cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        a:hover {
            background-color: #ff66a3;
        }
    </style>
</head>
<body>
    <div class="confirmacion">
        <h1>¡Cita Registrada Exitosamente!</h1>
        <p><strong>Servicio:</strong> <?php echo htmlspecialchars($servicio); ?></p>
        <p><strong>Fecha:</strong> <?php echo htmlspecialchars($fecha); ?></p>
        <p><strong>Hora:</strong> <?php echo htmlspecialchars($hora); ?></p>
        <a href="reservar.php">Reservar otra cita</a>
    </div>
</body>
</html>
