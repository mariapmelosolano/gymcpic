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
        <h1>
            GYMCPIC - software gestión gimnasio CPIC
        </h1>
    </header>
    <div class="container">
        <div class="data-container">
            <form action="/tipousuariogym/update" method="post">

            <div class="form-group">
                <label for="">Nombre id:</label>
                <input type="text" readonly value="<?php echo $tipousuariogym->id?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre del tipo usuario</label>
                <input type="text" value="<?php echo $tipousuariogym->nombre?>" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
            </form>
       
          </div>
    </div>
          <footer>
            <p>Desarrollado por ADSO 28743711
          </footer>
</body>
</html>