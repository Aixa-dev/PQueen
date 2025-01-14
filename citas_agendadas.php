<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - Salón de Belleza</title>
    <style>
        
    </style>
</head>
<header>
    <div class="logo">
        <h1>Agendar cita</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="inicios.php">Reservar</a></li>
            <li><a href="acerca.php">Acerca de</a></li>
        </ul>
    </nav>
</header>
<body>
    <form action="agendar_cita.php" method="POST">
        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" name="nombre_cliente" id="nombre_cliente" required><br>

        <label for="servicio">Selecciona el Servicio:</label><br>
        <select name="servicio" id="servicio" required>
            <option value="Manicure">Manicure</option>
            <option value="Extensiones de Pestañas">Extensiones de Pestañas</option>
            <option value="Tratamiento para el Cabello">Tratamiento para el Cabello</option>
        </select><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required><br>

        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" required><br><br>

        <button type="submit">Agendar Cita</button>
    </form>

    <h2>Citas Agendadas</h2>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Servicio</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';

            // Consulta para obtener las citas
            $sql = "SELECT * FROM citas ORDER BY fecha, hora";
            $result = mysqli_query($conexion, $sql);

            // Mostrar las citas en la tabla
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nombre_cliente']) . "</td>";
                echo "<td>" . htmlspecialchars($row['servicio']) . "</td>";
                echo "<td>" . htmlspecialchars($row['fecha']) . "</td>";
                echo "<td>" . htmlspecialchars($row['hora']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
