<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Usuarios</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if (empty($usuarios)) {
                    echo "<br>No se encuentran usuarios en la base de datos";
                } else {
                    foreach ($usuarios as $key => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - $value->nombre - $value->tipoDocumento - $value->documento - $value->email</span>
                            <div class='buttons'>
                            <a href='/usuario/view/$value->id'><button>Consultar</button></a>
                        <a href='/usuario/edit/$value->id'><button>Editar</button></a>
                        <a href='/usuario/delete/$value->id'><button>Eliminar</button></a>
                    </div>
                        </div>";
                    }
                }
            ?>
         </div>
        <div class="create-button">
    <a href="/usuario/new"><button class="create-new-button">Crear Nuevo Programa</button></a>
</div>
    </div>
</body>
</html>