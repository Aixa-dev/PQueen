<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: Light pink;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error {
            color: Light pink;
            background-color: #ff4d4d;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 20px;
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    include 'conexion.php';

    $nombre_cliente = $_POST['nombre_cliente'];
    $servicio = $_POST['servicio'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $sql_check = "SELECT * FROM citas WHERE servicio = ? AND Fecha = ? AND Hora_Inicio = ?";
    $stmt_check = $conexion->prepare($sql_check);
    $stmt_check->bind_param("sss", $servicio, $fecha, $hora);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        echo "<div class='error'>El horario seleccionado ya está ocupado. Por favor, elige otro.</div>";
        $stmt_check->close();
        $conexion->close();
        exit;
    } else {
        $sql_insert = "INSERT INTO citas (id_cliente, id_servicios, Fecha, Hora_Inicio, servicio) VALUES (NULL, NULL, ?, ?, ?)";
        $stmt_insert = $conexion->prepare($sql_insert);
        $stmt_insert->bind_param("sss", $fecha, $hora, $servicio);

        if ($stmt_insert->execute()) {
            header("Location: confirmacion_cita.php?servicio=$servicio&fecha=$fecha&hora=$hora");
            exit;
        } else {
            echo "<div class='error'>Error al agendar la cita: " . $stmt_insert->error . "</div>";
        }

        $stmt_insert->close();
    }

    $stmt_check->close();
    $conexion->close();
    ?>
</body>
</html>
