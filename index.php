<?php
// Configuración inicial (opcional)
$title = "Salón de Belleza";
$welcomeMessage = "¡Te ayudamos a resaltar tu belleza con nuestros servicios personalizados!";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Inicio</title>
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

/* Encabezado */
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

/* Sección Servicios */
main {
    padding: 20px;
}

.servicios h2 {
    font-size: 2em;
    color: #ff66a3;
    margin-bottom: 30px;
}

.lista-servicios {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.servicio {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    overflow: hidden;
    text-align: left;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.servicio:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.servicio .nombre-servicio h3 {
    background-color: #ff66a3;
    color: white;
    margin: 0;
    padding: 15px;
    font-size: 1.5em;
}

.servicio .descripcion-servicio {
    padding: 15px;
    font-size: 1em;
    color: #666;
}

.servicio .descripcion-servicio p {
    margin: 0;
}

.servicio .imagen-servicio {
    text-align: center;
}

.servicio .imagen-servicio img {
    width: 100%;
    height: auto;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

/* Footer */
footer {
    background-color: #ff99cc;
    color: white;
    padding: 10px 0;
    margin-top: 30px;
    font-size: 1em;
}

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1><?php echo $title; ?></h1>
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
    <main>
        <section class="bienvenida">
            <h2>Bienvenidos a QueenFactory</h2>
            <p><?php echo $welcomeMessage; ?></p>
        </section>
        
        <!-- Sección para el logo y las fotos -->
        <section class="logo-y-fotos">
            <div class="logo-container">
                <img src="img/imagenes/logo.jpeg" alt="Logo del Salón" class="logo-img">
            </div>
            <div class="fotos-container">
            <img src="img/imagenes/foto1.jpeg" alt="Foto 1" class="foto">
            <img src="img/imagenes/foto5.jpeg" alt="Foto 5" class="foto">
            </div>

        </section>
    </main>
    <footer>
        <p>&copy; 2024 <?php echo $title; ?>. Todos los derechos reservados.</p>
    </footer>
</body>
</html>


