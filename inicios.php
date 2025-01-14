<?php
include ("conexion.php");
// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password']; // La contraseña ingresada
    
    // Consulta para obtener la información del cliente basado en el correo
    $sql = "SELECT * FROM cliente WHERE Correo = ?";
    
    // Preparar la declaración
    if ($stmt = $conn->prepare($sql)) {
        // Enlazar los parámetros
        $stmt->bind_param("s", $correo);
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Obtener el resultado
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Si encontramos un cliente con ese correo
            $row = $result->fetch_assoc();
            
            // Verificar si la contraseña coincide (suponiendo que la contraseña está almacenada sin cifrado)
            if ($password == $row['password']) {
                // El login fue exitoso
                echo "Bienvenido, " . $row['Nombre'] . "!";
                // Aquí puedes iniciar una sesión o redirigir a otra página
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "No se encontró un cliente con ese correo.";
        }
        
        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
}

// Cerrar la conexión cuando termines
$conexion->close();
?>

<!-- Formulario de login -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Servicio</title>
    <style>
        /* General */
body {
    font-family: 'Arial', sans-serif;
    background-color: #ffe6f2; /* Fondo rosado claro */
    margin: 0;
    padding: 0;
    color: #333;
    text-align: center;
}

/* Encabezado */
header {
    background-color: #ff99cc; /* Fondo rosado intenso */
    color: white;
    padding: 20px 0;
    margin-bottom: 30px;
    border-bottom: 3px solid #ff66a3; /* Línea de detalle */
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
    background-color: Light pink;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #ff99cc;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1

    </style> <!-- Se mantiene el mismo archivo de estilos -->
</head>
<body>
    <header>
        <div class="logo">
            <h1>Reservar Servicio</h1>
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

<form method="POST" action="reservar.php">
    <label for="correo">Correo:</label><br>
    <input type="email" id="correo" name="correo" required><br><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Ingresar">
</form>
<!-- Botón de "Regístrate" -->
<p>¿Nuevo usuario? <a href="registro.php"><button>Regístrate si eres nuevo usuario</button></a></p>
</head>
</html>
