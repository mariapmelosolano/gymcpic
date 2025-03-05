<?php
namespace App\Controllers;

use App\Models\CentroFormacionModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/CentroFormacionModel.php";
class CentroFormacionController extends BaseController {
    public function index(){
        echo "<br>CONTROLLER> CentroFormacionController";
        echo "<br>ACTION> index";
       // $this->reder();
        
    }
    public function view() {
        //echo "<br>CONTROLLER> RolController";
       // echo "<br>ACTION> view";
        //Llamamos al modelo de rol
        $CentroFormacionObj = new CentroFormacionModel ();
        $CentroFormacion = $CentroFormacionObj->getAll();
        //Llamamos a la vista
        $data = ["centroformacion"=>$CentroFormacion];
        $this->render('centroFormacion/viewCentroFormacion.php', $data);
       //include_once MAIN_APP_ROUTE.'../views/rol/viewRol.php';
        
    }
    public function newCentroFormacion(){
$this->render("centroFormacion/newCentroFormacion.php");
    }
    public function createcentroFormacion() {
        if(isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            //Creamos instancia del modelo rol
            $rolObj = new CentroFormacionModel();
        $rolObj->saveCentroFormacion($nombre);
        $this->redirectTo("centroFormacion/view");
        }
    }
    public function viewCentroFormacion($id)
    {
        $centroFormacionObj = new CentroFormacionModel();
        $centroInfo = $centroFormacionObj->getCentroFormacion($id);
        $data = [
            "centro" => $centroInfo,
        ];
        $this->render('centroFormacion/viewOneCentroFormacion.php', $data);
    }
    
        public function editCentroFormacion($id)
        {
            $centroFormacionObj = new CentroFormacionModel();
            $centroInfo = $centroFormacionObj->getCentroFormacion($id);
            $data = [
                "centro" => $centroInfo
            ];
            $this->render('centroFormacion/editCentroFormacion.php', $data);
        }
    
        public function updateCentroFormacion()
        {
            if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
                $id = $_POST['txtId'] ?? null;
                $nombre = $_POST['txtNombre'] ?? null;
    
                $centroFormacionObj = new CentroFormacionModel();
                $res = $centroFormacionObj->editCentroFormacion($id, $nombre);
                $this->redirectTo("centroFormacion/view");
            }
        }
        public function deleteCentroFormacion($id) {
            $centroFormacionObj = new CentroFormacionModel();
            $result = $centroFormacionObj->deleteCentroFormacion($id);
            if ($result) {
                $this->redirectTo("centroFormacion/view");
            } else {
                echo "Error al eliminar el rol.";
            }
        }
}