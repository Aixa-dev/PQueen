<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - Salón de Belleza</title>
    <style>
        /* General */
body {
    font-family: 'Arial', sans-serif;
    background-color: #fdf0f6; /* Fondo rosado claro */
    margin: 0;
    padding: 0;
    color: #333;
    text-align: center;
}

header {
    background-color: #ff99cc; /* Fondo rosado vibrante */
    color: white;
    padding: 20px 0;
    border-bottom: 3px solid #ff66a3;
}

header .logo h1 {
    margin: 0;
    font-size: 2.5em;
    font-weight: bold;
}

header nav ul {
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

header nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 1.2em;
    font-weight: bold;
    transition: color 0.3s ease;
}

header nav ul li a:hover {
    color: #ffe6f2; /* Color más claro al pasar el cursor */
}

/* Formulario */
form {
    background-color: #ffffff; /* Fondo blanco */
    margin: 20px auto;
    padding: 20px;
    border: 2px solid #ff99cc;
    border-radius: 10px;
    max-width: 500px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
}

form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #ff66a3;
}

form input,
form select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

form button {
    background-color: #ff99cc;
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #ff66a3;
}

/* Tabla */
table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
}

table thead {
    background-color: #ff99cc;
    color: white;
}

table thead th {
    padding: 10px;
    border: 1px solid #ddd;
}

table tbody tr {
    border-bottom: 1px solid #ddd;
}

table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tbody td {
    padding: 10px;
}

table tbody td:last-child {
    text-align: center;
}

table tbody td button {
    background-color: #ff99cc;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

table tbody td button:hover {
    background-color: #ff66a3;
}

/* Responsive Design */
@media (max-width: 768px) {
    form, table {
        width: 95%;
    }
}

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
        
        <tbody>
            <?php
            include 'conexion.php';

            $sql = "SELECT * FROM citas";
            $result = mysqli_query($conexion, $sql);

            while($row = mysqli_fetch_assoc($result)) {
                
            }
            // Mostrar mensajes de éxito o error si existen
if (isset($_GET['success'])) {
    echo "<p style='color: green;'>{$_GET['success']}</p>";
}
if (isset($_GET['error'])) {
    echo "<p style='color: red;'>{$_GET['error']}</p>";
}
            ?>
            
        </tbody>
    </table>
</body>
</html>



