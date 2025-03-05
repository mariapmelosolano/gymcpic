<?php
namespace App\Controllers;

use ValueError;

class BaseController {
    public function render(string $view, array $arrayData=null)
     {
if(isset($arrayData) && is_array($arrayData)){
  foreach ($arrayData as $key => $value) {
      // //Se crean variables de acuerdo las keys
      //Se extraen todos los datos de la datos que llegan en arrayData
   $$key = $value;
  }
}
include_once MAIN_APP_ROUTE.'../views/'.$view; //rols/viewRol.php
}
    public function formatNumber(){
    echo "<br>Formatea el numero";
    }
    public function redirectTo($view) {
        header("Location: /$view");
}
}

