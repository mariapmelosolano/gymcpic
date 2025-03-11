

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
                if (empty($controles)) {
                    echo "<br>No se encuentran controles de progreso en la base de datos";
                } else {
                    foreach ($controles as $key => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - Fecha: $value->fechaRealizacion  $value->peso - $value->cintura - $value->cadera - $value->musloDerecho- $value->musloIzquierdo - $value->brazoDerecho - 
                            <br> $value->brazoIzquierdo - $value->antebrazoDerecho - $value->antebrazoIzquierdo - $value->pantorrillaDerecha- $value->pantorrillaIzquierda - $value->examenMedico - $value->observaciones- Usuario:  $value->fkIdUsuario </span>
                            <div class='buttons'>
                                   <a href='/controlProgreso/view/$value->id'><button>Consultar</button></a>
                        <a href='/controlProgreso/edit/$value->id'><button>Editar</button></a>
                        <a href='/controlProgreso/delete/$value->id'><button>Eliminar</button></a>
                            </div>
                        </div>";
                    }
                }
            ?>
        
        </div>
        <div class="create-button">
    <a href="/controlProgreso/new"><button class="create-new-button">Crear Nuevo control</button></a>
</div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 28743711</p>
    </footer>
</body>
</html>
