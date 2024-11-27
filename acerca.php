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
        /* General */
body {
    font-family: 'Arial', sans-serif;
    background-color: #fdf0f6; /* Fondo rosa claro */
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
    color: #ffe6f2; /* Color más claro al pasar el cursor */
}

/* Sección "Acerca de" */
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

.acerca .contenido-acerca {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.acerca .informacion-dueña {
    flex: 1 1 45%;
    color: #333;
    font-size: 1em;
    line-height: 1.6;
}

.acerca .informacion-dueña h3 {
    font-size: 1.5em;
    color: #ff66a3;
    margin-bottom: 10px;
}

.acerca .informacion-dueña p a {
    color: #ff99cc;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.acerca .informacion-dueña p a:hover {
    color: #ff66a3;
}

/* Fotos */
.acerca .fotos-dueña {
    flex: 1 1 45%;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    align-items: center;
}

.acerca .fotos-dueña .foto img {
    width: 100%;
    max-width: 200px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.acerca .fotos-dueña .foto img:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

/* Espaciado y estructura */
main {
    padding: 20px;
    margin: 0 auto;
}

@media (max-width: 768px) {
    .acerca .contenido-acerca {
        flex-direction: column;
    }

    .acerca .informacion-dueña, 
    .acerca .fotos-dueña {
        flex: 1 1 100%;
        text-align: center;
    }
}

    </style> <!-- Se mantiene el mismo archivo de estilos -->
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
            <div class="contenido-acerca">
                <div class="informacion-dueña">
                    <h3>Natalia Michel Avila Maldonado</h3>
                    <p><strong>Teléfono:</strong> 7291414011</p>
                    <p><strong>Instagram:</strong> <a href="https://instagram.com/queensfactory_" target="_blank">queensfactory_</a></p>
                    <p><strong>Ubicación:</strong> Toluca, Metepec, Estado de México</p>
                </div>
                <div class="fotos-dueña">
                    <div class="foto">
                    <img src="img/imagenes/foto1.jpeg" alt="Foto 1" class="foto">
                    
                    </div>
                    <div class="foto">
                    <img src="img/imagenes/foto2.jpeg" alt="Foto 2" class="foto">
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
