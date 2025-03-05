<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de las Actividades</title>
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
    <header>
        <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>

    </header>
    <div class="container">
        <div class="data-container">
            <?php
            if (empty($actividad)) {
                echo '<br>No se encuentran actividades en la base de datos';
            } else {
                foreach ($actividad as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - Nombre: $value->nombre - Descripción: $value->descripcion</span>
                        <div class='buttons'>
                            <a href='/actividad/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/actividad/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/actividad/delete/$value->id'> <button>Eliminar</button> </a> 
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
        <div class="create-button">
    <a href="/actividad/new"><button class="create-new-button">Crear Nuevo Programa</button></a>
</div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>

</html>