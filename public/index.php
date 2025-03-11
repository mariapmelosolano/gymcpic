<?php

require_once '../app/config/global.php';   
require_once '../app/controllers/homeController.php';  
require_once '../app/controllers/rolController.php';   
require_once '../app/controllers/centroFormacionController.php';
require_once '../app/controllers/programaFormacionController.php';
require_once '../app/controllers/actividadController.php';
require_once '../app/controllers/TipoUsuarioGymController.php';
require_once '../app/controllers/grupoController.php'; 
require_once '../app/controllers/usuarioController.php';
require_once '../app/controllers/ControlProgresoController.php';



$url = $_SERVER['REQUEST_URI']; 
$routes = include_once '../app/config/routes.php';

if ($url === '/') {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GYMCPIC - Inicio</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <header>
            <h1>GYMCPIC - Software de Gestión de Gimnasio CPIC</h1>
        </header>
        <div class="container">
            <div class="menu-container">
                <h2>Seleccione una opción:</h2>
                <div class="menu-buttons">
                    <a href="/usuario/view"><button>Gestión de Usuarios</button></a>
                    <a href="/tipousuariogym/view"><button>Gestión de Tipos de Usuario</button></a>
                    <a href="/rol/view"><button>Gestión de Roles</button></a>
                    <a href="/centroFormacion/view"><button>Gestión de Centros de Formación</button></a>
                    <a href="/programaFormacion/view"><button>Gestión de Programas de Formación</button></a>
                    <a href="/actividad/view"><button>Gestión de Actividades</button></a>
                    <a href="/grupo/view"><button>Gestión de Grupos</button></a>
                    <a href="/controlProgreso/view"><button>Gestión de Control de Progreso</button></a>
                    <a href="/registroIngreso/view"><button>Gestión de Registros de Ingreso</button></a>
                </div>
            </div>
        </div>
        <footer>
            <p>Desarrollado por ADSO 28743711</p>
        </footer>
    </body>
    </html>';
    exit; 
}


$matchedRoute = null;
foreach ($routes as $route => $routeConfig) {
    if (preg_match("#^$route$#", $url, $matches)) {
        $matchedRoute = $routeConfig;
        break;
    }
}

if ($matchedRoute) {
    $controllerName = $matchedRoute['controller'];
    $actionName = $matchedRoute['action'];
    if (class_exists($controllerName) && method_exists($controllerName, $actionName)) {
    
        $parameters = array_slice($matches, 1);
        $controller = new $controllerName();
        $controller->$actionName(...$parameters);
        exit;
    }
}


http_response_code(404);
echo "Página no encontrada";
exit;