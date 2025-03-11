<?php
    return [
        "/" => [
            "controller" => "App\Controllers\HomeController",
            "action" => "index"
        ],
    
        "/home" => [
            "controller" => "App\Controllers\HomeController",
            "action" => "index"
        ],
    
        "/hello" => [
            "controller" => "App\Controllers\HomeController",
            "action" => "saludar"
        ],

        // Roles
        "/rol/index" => [
            "controller" => "App\Controllers\RolController",
            "action" => "index"
        ],
        "/rol/view" => [
            "controller" => "App\Controllers\RolController",
            "action" => "view"
        ],
        "/rol/new" => [
            "controller" => "App\Controllers\RolController",
            "action" => "newRol"
        ],
        "/rol/create" => [
            "controller" => "App\Controllers\RolController",
            "action" => "createRol"
        ],
        "/rol/view/(\d+)" => [
            "controller" => "App\Controllers\RolController",
            "action" => "viewRol"
        ],
        "/rol/edit/(\d+)" => [
            "controller" => "App\Controllers\RolController",
            "action" => "editRol"
        ],
        "/rol/update" => [
            "controller" => "App\Controllers\RolController",
            "action" => "updateRol"
        ],
        "/rol/delete/(\d+)" => [
            "controller" => "App\Controllers\RolController",
            "action" => "deleteRol"
        ],

        // Actividades
        "/actividad/view" => [ // Nueva ruta para ver actividades
            "controller" => "App\Controllers\ActividadController",
            "action" => "view"
        ],
        "/actividad/new" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "newActividad"
        ],
        "/actividad/create" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "createActividad"   
        ],
        "/actividad/edit/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "editActividad"
        ],
        "/actividad/view/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "viewActividad"
        ],
        "/actividad/update" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "updateActividad"
        ],
        "/actividad/delete/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "deleteActividad"
        ],
     // Centros de Formacion
     "/centroFormacion/view" => [
        "controller" => "App\Controllers\CentroFormacionController",
        "action" => "view"
    ],
    "/centroFormacion/new" => [
        "controller" => "App\Controllers\CentroFormacionController",
        "action" => "newCentroFormacion"
    ],
    "/centroFormacion/create" => [
        "controller" => "App\Controllers\CentroFormacionController",
        "action" => "createCentroFormacion"   
    ],
    "/centroFormacion/edit/(\d+)" => [
        "controller" => "App\Controllers\CentroFormacionController",
        "action" => "editCentroFormacion"
    ],
    "/centroFormacion/view/(\d+)" => [
        "controller" => "App\Controllers\CentroFormacionController",
        "action" => "viewCentroFormacion"
    ],
    "/centroFormacion/update" => [
        "controller" => "App\Controllers\CentroFormacionController",
        "action" => "updateCentroFormacion"
    ],
    "/centroFormacion/delete/(\d+)" => [
        "controller" => "App\Controllers\CentroFormacionController",
        "action" => "deleteCentroFormacion"
    ],

// Programa de Formacion
"/programaFormacion/view" => [
    "controller" => "App\Controllers\ProgramaFormacionController",
    "action" => "view"
],
"/programaFormacion/new" => [
    "controller" => "App\Controllers\ProgramaFormacionController",
    "action" => "newProgramaFormacion"
],
"/programaFormacion/create" => [
    "controller" => "App\Controllers\ProgramaFormacionController",
    "action" => "createProgramaFormacion"
],
"/programaFormacion/edit/(\d+)" => [
    "controller" => "App\Controllers\ProgramaFormacionController",
    "action" => "editProgramaFormacion"
],
"/programaFormacion/view/(\d+)" => [
    "controller" => "App\Controllers\ProgramaFormacionController",
    "action" => "viewProgramaFormacion"
],
"/programaFormacion/update" => [
    "controller" => "App\Controllers\ProgramaFormacionController",
    "action" => "updateProgramaFormacion"
],
"/programaFormacion/delete/(\d+)" => [
        "controller" => "App\Controllers\programaFormacionController",
        "action" => "deleteProgramaFormacion"
    ],



   //TIPO USUARIO
        "/tipousuariogym/index" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "index"
        ],
        "/tipousuariogym/view" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "view"
        ],
        "/tipousuariogym/new" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "newTipoUsuarioGym"
        ],
        "/tipousuariogym/create" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "createTipoUsuarioGym"
        ],
        "/tipousuariogym/view/(\d+)" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "viewTipoUsuarioGym"
        ],
        "/tipousuariogym/edit/(\d+)" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "editTipoUsuarioGym"
        ],
        "/tipousuariogym/update" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "updateTipoUsuarioGym"
        ],
        "/tipousuariogym/delete/(\d+)" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "deleteTipoUsuarioGym"
        ],



//usuario
        '/usuario/index' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'index'
    ],
    '/usuario/view' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'view'
    ],
    '/usuario/new' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'newUsuario'
    ],
    '/usuario/create' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'createUsuario'
    ],
    '/usuario/view/(\d+)' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'viewUsuario'
    ],
    '/usuario/edit/(\d+)' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'editUsuario'
    ],
    '/usuario/update' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'updateUsuario'
    ],
    '/usuario/delete/(\d+)' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'deleteUsuario'
    ],


    //

    '/registroIngreso/index'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'index'
    ],
    '/registroIngreso/view'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'view'
    ],
    '/registroIngreso/new' => [
        'controller' => 'App\Controllers\registroIngresoController',
        'action' => 'newRegistroIngreso'     // Nombre de la funcion 
    ], 
    '/registroIngreso/create'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'createRegistroIngreso'
    ],
    '/registroIngreso/view/(\d+)'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'viewRegistroIngreso'
    ],
    '/registroIngreso/edit/(\d+)'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'editRegistroIngreso'
    ],
    '/registroIngreso/update'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'updateRegistroIngreso'
    ],
    '/registroIngreso/delete/(\d+)'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'deleteRegistroIngreso'






    ],
    
    
    //control proceso
    '/controlProgreso/index'=> [
        'controller' =>'App\Controllers\controlProgresoController',
        'action' => 'index'
    ],
    '/controlProgreso/view'=> [
        'controller' =>'App\Controllers\controlProgresoController',
        'action' => 'view'
    ],
    '/controlProgreso/new' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'newControlProgreso'     
    ], 
    '/controlProgreso/create'=> [
        'controller' =>'App\Controllers\controlProgresoController',
        'action' => 'createControlProgreso'
    ],
    '/controlProgreso/view/(\d+)'=> [
        'controller' =>'App\Controllers\controlProgresoController',
        'action' => 'viewControlProgreso'
    ],
    '/controlProgreso/edit/(\d+)'=> [
        'controller' =>'App\Controllers\controlProgresoController',
        'action' => 'editControlProgreso'
    ],
    '/controlProgreso/update'=> [
        'controller' =>'App\Controllers\controlProgresoController',
        'action' => 'updateControlProgreso'
    ],
    '/controlProgreso/delete/(\d+)'=> [
        'controller' =>'App\Controllers\controlProgresoController',
        'action' => 'deleteControlProgreso'
    ],



    //
    '/grupo/index'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'index'
    ],
    '/grupo/view'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'view'
    ],
    '/grupo/new' => [
        'controller' => 'App\Controllers\grupoController',
        'action' => 'newGrupo'     // Nombre de la funcion 
    ], 
    '/grupo/create'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'createGrupo'
    ],
    '/grupo/view/(\d+)'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'viewGrupo'
    ],
    '/grupo/edit/(\d+)'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'editGrupo'
    ],
    '/grupo/update'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'updateGrupo'
    ],
    '/grupo/delete/(\d+)'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'deleteGrupo'
    ],
];

   
?>