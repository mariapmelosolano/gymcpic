<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Tipo de Usuario</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>GYMCPIC - Software Gestión Gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <form action="/tipousuariogym/create" method="post">
                <div class="form-group">
                    <label for="txtNombre">Nombre del Tipo de Usuario</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 28743711</p>
    </footer>
</body>
</html>
