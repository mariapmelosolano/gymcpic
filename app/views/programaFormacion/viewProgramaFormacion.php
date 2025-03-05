<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de los Programas de Formación</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
            if (empty($programaFormacion)) {
                echo '<br>No se encuentran programas de formación en la base de datos';
            } else {
                foreach ($programaFormacion as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/programaFormacion/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/programaFormacion/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/programaFormacion/delete/$value->id'> <button>Eliminar</button> </a>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
        <div class="create-button">
    <a href="/programaFormacion/new"><button class="create-new-button">Crear Nuevo Programa</button></a>
</div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>

</html>