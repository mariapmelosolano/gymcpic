<?php

namespace App\Controllers;

use App\Models\RolModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/RolModel.php';

class RolController extends BaseController
{
    public function index()
    {
        echo '<br>CONTROLLER> RolController';
        echo '<br>ACTION> index';
        $this->redirectTo("rol/view");
    }
    public function view()
    {
        // echo '<br>CONTROLLER> RolController';
        // echo '<br>ACTION> view';
        //Llamamos al modelo de Rol
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();
        //Llamamos a la vista
        $data = ["roles" => $roles];
        $this->render('rol/viewRol.php', $data);
    }
    public function newRol(){
        $this->render('rol/newRol.php');
    }
//guarda en la base de datos
public function createRol() {
    if(isset($_POST['txtNombre'])) {
        $nombre = $_POST['txtNombre'] ?? null;
        //Creamos instancia del modelo rol
        $rolObj = new RolModel();
    $rolObj->saveRol($nombre);
    $this->redirectTo("rol/view");
    }
}
    public function viewRol($id) {
        $rolObj = new RolModel();
        $rolInfo = $rolObj->getRol($id);
        $data = [
            "rol" => $rolInfo,
        ];
        $this->render('rol/viewOneRol.php', $data);
    }

    public function editRol($id){
        $rolObj = new RolModel();
        $rolInfo = $rolObj->getRol($id);
        $data = [
            "rol" => $rolInfo
        ];
        $this->render('rol/editRol.php', $data);
    }

    public function updateRol(){
        if(isset($_POST['txtNombre'])){
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $rolObj = new RolModel();
            $resp = $rolObj->editRol($id, $nombre);
        }
        header('Location: /rol/view');
    }
    public function deleteRol($id) {
        $rolObj = new RolModel();
        $result = $rolObj->deleteRol($id);
        if ($result) {
            $this->redirectTo("rol/view");
        } else {
            echo "Error al eliminar el rol.";
        }
    }
}
