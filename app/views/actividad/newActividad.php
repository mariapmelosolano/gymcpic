<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega una nueva Actividad</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <form action="/actividad/create" method="post">
                <div class="form-group">
                    <label for="">Nombre de la actividad:</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    <label for="">Descripción de la actividad:</label>
                    <input type="text" name="txtDescripcion" id="txtDescripcion" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>

    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>