<?php
// Archivo acerca.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <style>
        /* Manteniendo tus estilos previos */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fdf0f6; 
            margin: 0;
            padding: 0;
            color: #333;
            text-align: center;
        }

        header {
            background-color: #ff99cc;
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
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
            color: #ffe6f2;
        }

        main .acerca {
            padding: 30px;
            text-align: left;
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .acerca h2 {
            color: #ff66a3;
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .acerca .informacion-dueña {
            font-size: 1em;
            line-height: 1.6;
        }

        .boton {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            font-size: 1em;
            color: white;
            background-color: #ff66a3;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .boton:hover {
            background-color: #ff99cc;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Acerca de QueenFactory</h1>
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
        <section class="acerca">
            <h2>Conoce a la Dueña de QueenFactory</h2>
            <div class="informacion-dueña">
                <h3>Natalia Michel Avila Maldonado</h3>
                <p><strong>Teléfono:</strong> 7291414011</p>
                <p>
                    <a href="https://instagram.com/queensfactory_" target="_blank" class="boton">Instagram: queensfactory_</a>
                </p>
                <p>
                    <a href="https://www.google.com/maps/place/Toluca,+Metepec,+Estado+de+México" target="_blank" class="boton">Ubicación</a>
                </p>
            </div>
            <div class="fotos-dueña">
                <div class="foto">
                    <img src="img/imagenes/foto1.jpeg" alt="Foto 1" class="foto" width="300">
                </div>
                <div class="foto">
                    <img src="img/imagenes/foto2.jpeg" alt="Foto 2" class="foto" width="300">
                </div>
            </div>
        </section>
    </main>
</body>
</html>
