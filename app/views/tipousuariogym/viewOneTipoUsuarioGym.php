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
        <?php
        if ($tipousuariogym && is_object($tipousuariogym)) {
             echo "<div class='record'>
                <span>ID: $tipousuariogym->id </span>
                 <span>Nombre: $tipousuariogym->nombre </span>
                </div>";
            
        }
        ?>

          </div>
    </div>
          <footer>
            <p>Desarrollado por ADSO 28743711
          </footer>
</body>
</html>