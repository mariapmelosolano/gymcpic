<?php

require_once '../app/config/global.php';   // Se crea la ruta para ingresar a la app
require_once '../app/controllers/homeController.php';   // Se crea la ruta para ingresar a la app
require_once '../app/controllers/rolController.php';   // Se crea la ruta para ingresar a la app
require_once '../app/controllers/centroFormacionController.php';
require_once '../app/controllers/programaFormacionController.php';
require_once '../app/controllers/actividadController.php';

$url = $_SERVER['REQUEST_URI'];   // Detecta lo que se ingresa en la url
$routes = include_once '../app/config/routes.php';


    $matchedRoute = null;
    foreach ($routes as $route => $routeConfig) {
        if (preg_match("#^$route$#", $url,$matches)) {
            $matchedRoute = $routeConfig;
            break;
        }
    }
    if ($matchedRoute) {
        $controllerName = $matchedRoute['controller'];
        $actionName = $matchedRoute['action'];
        if (class_exists($controllerName) && method_exists($controllerName,$actionName)) {
            // Obtener parametros capturados por URL
            $parameters = array_slice($matches, 1);
            $controller = new $controllerName();
            $controller ->$actionName(...$parameters);
            exit;
        }
    }
// if(array_key_exists($url, $routes)) {
//     // $controller = new HomeController();            // Creamos un objeto de la clase  HomeController
//     // $controller->saludar(); 
//     $controllerName = $routes[$url]['controller'];
//     $actionName = $routes[$url]['action'];
//     $controller = new $controllerName();      //App/Controller/HomeController
//     $controller -> $actionName();     //index()
// } else {
//     http_response_code(404);
//     echo "Página no encontrada";
//     exit();
// }