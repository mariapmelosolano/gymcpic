<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Programa de Formación</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Nuevo Programa de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <form action="/programaFormacion/create" method="post">
                <div class="form-group">
                    <label for="txtCodigo">Código del Programa:</label>
                    <input type="text" name="txtCodigo" id="txtCodigo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre del Programa:</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fkidcentroformacion">Centro de Formación:</label>
                    <select name="fkidcentroformacion" id="fkidcentroformacion" class="form-control">
                        <option value="">Seleccione un Centro de Formación</option>
                        <?php
                            require_once MAIN_APP_ROUTE . '../models/CentroFormacionModel.php';
                            use App\Models\CentroFormacionModel;

                            $centroFormacionObj = new CentroFormacionModel();
                            $centros = $centroFormacionObj->getAll();

                            foreach ($centros as $centro) {
                                echo "<option value='$centro->id'>$centro->nombre</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Crear</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>