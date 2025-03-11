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
        if (empty($grupos)) {
            echo "<br>No se encuentran grupos en la base de datos";
        } else {
            foreach ($grupos as $key => $value) {
                echo "<div class='record'>
                    <span>ID: $value->id - $value->ficha - $value->cantAprendices - $value->estado - $value->fechaIniLectiva - $value->fechaFinLectiva - $value->fkIdProgForm</span>
                    <div class='buttons'>
                            <a href='/grupo/view/$value->id'><button>Consultar</button></a>
                        <a href='/grupo/edit/$value->id'><button>Editar</button></a>
                        <a href='/grupo/delete/$value->id'><button>Eliminar</button></a>
                    </div>
                </div>";
            }
        }
    ?>
        
        </div>
        <div class="create-button">
    <a href="/grupo/new"><button class="create-new-button">Crear Nuevo Programa</button></a>
</div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 28743711</p>
    </footer>
</body>
</html>






