<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>GYMCPIC - software gestión gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
            if (empty($tipousuarios)) {
                echo "<br>No se encuentran roles en la base de datos";
            } else {
                foreach ($tipousuarios as $key => $value) {
                    echo "<div class='record'>
                    <span>ID: $value->id - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/tipousuariogym/view/$value->id'><button>Consultar</button></a>
                        <a href='/tipousuariogym/edit/$value->id'><button>Editar</button></a>
                        <a href='/tipousuariogym/delete/$value->id'><button>Eliminar</button></a>
                    </div>
                    </div>";
                }
            }
            ?>
        </div>
        <div class="create-button">
    <a href="/tipousuariogym/new"><button class="create-new-button">Crear Nuevo Programa</button></a>
</div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 28743711</p>
    </footer>
</body>
</html>