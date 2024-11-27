<?php
// Configuración de servicios
$services = [
    ["title" => "Manicure", "description" => "Relájate mientras cuidamos de tus manos.", "image" => "img/imagenes/foto1.jpeg"],
    ["title" => "Extensiones de Pestañas", "description" => "Realza tu mirada con nuestros estilos únicos.", "image" => "img/imagenes/foto2.jpeg"],
    ["title" => "Tratamiento Capilar", "description" => "Recupera la vitalidad de tu cabello con nosotros.", "image" => "img/imagenes/foto3.jpeg"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Salón de Belleza</title>
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
            <h1>Salón de Belleza</h1>
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
        <section class="servicios">
            <h2>Servicios Ofrecidos</h2>
            <div class="lista-servicios">
                <?php foreach ($services as $service): ?>
                    <div class="servicio">
                        <div class="nombre-servicio">
                            <h3><?php echo $service["title"]; ?></h3>
                        </div>
                        <div class="descripcion-servicio">
                            <p><?php echo $service["description"]; ?></p>
                        </div>
                        <div class="imagen-servicio">
                            <img src="<?php echo $service["image"]; ?>" alt="<?php echo $service["title"]; ?>" class="foto-servicio">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Salón de Belleza. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
