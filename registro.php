<?php
include ("conexion.php");
// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}


// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $numero = $_POST['numero'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Cifrar la contraseña antes de almacenarla
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Consulta para insertar un nuevo cliente en la base de datos
    $sql = "INSERT INTO cliente (Nombre, Apellido_Paterno, Apellido_Materno, Numero, Correo, Pass) 
            VALUES (?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conexion->prepare($sql)) {
        // Enlazar los parámetros
        $stmt->bind_param("ssssss", $nombre, $apellido_paterno, $apellido_materno, $numero, $correo, $hashed_password);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Usuario registrado exitosamente. Ahora puedes iniciar sesión.";
        } else {
            echo "Error al registrar al usuario: " . $stmt->error;
        }
        
        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
 
    }
    header ("Location:inicios.php");
}

// Cerrar la conexión cuando termines
$conexion->close();
?>
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
    background-color: white;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #ff99cc;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
}

form label {
    font-weight: bold;
    color: #ff66a3;
}

form input[type="email"],
form input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ff99cc;
    border-radius: 5px;
}

form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #ff66a3;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #ff99cc;
}

/* Botón de registro */
p a button {
    background-color: #ff99cc;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

p a button:hover {
    background-color: #ff66a3;
}

/* Ajustes para el texto debajo del formulario */
p {
    margin-top: 20px;
    font-size: 1em;
    color: #ff66a3;
}

p a {
    text-decoration: none;
}

    </style>> <!-- Se mantiene el mismo archivo de estilos -->
</head>
<body>
    <header>
        <div class="logo">
            <h1>Registrar Servicio</h1>
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

<!-- Formulario de registro -->
<form method="POST" action="">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>
    
    <label for="apellido_paterno">Apellido Paterno:</label><br>
    <input type="text" id="apellido_paterno" name="apellido_paterno" required><br><br>
    
    <label for="apellido_materno">Apellido Materno:</label><br>
    <input type="text" id="apellido_materno" name="apellido_materno" required><br><br>
    
    <label for="numero">Número de teléfono:</label><br>
    <input type="text" id="numero" name="numero" required><br><br>
    
    <label for="correo">Correo:</label><br>
    <input type="email" id="correo" name="correo" required><br><br>
    
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Registrarme">
</form>
