<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Programa de Formación</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista del Programa de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if ($programa && is_object($programa)) {
                    echo "
                        <div class='record'>
                            <span>ID: $programa->id </span>
                            <span>Código: $programa->codigo </span>
                            <span>Nombre: $programa->nombre </span>
                            <span>Centro de Formación: $programa->nombreCentro </span>
                        </div>
                    ";
                } else {
                    echo "<p>No se encontró el programa de formación.</p>";
                }
            ?>
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>