<?php

namespace App\Controllers;

use App\Models\TipoUsuarioGymModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/TipoUsuarioGymModel.php';

class TipoUsuarioGymController extends BaseController
{
    public function index()
    {
      
        $this->redirectTo("tipousuariogym/view");
    }
    public function view()
    {
      
        $tipoUsarioGymObj = new TipoUsuarioGymModel();
        $tipousuarios = $tipoUsarioGymObj ->getAll();
        //Llamamos a la vista
        $data = ["tipousuarios" => $tipousuarios];
        $this->render('tipousuariogym/viewTipoUsuarioGym.php', $data);
    }





    
    public function newTipoUsuarioGym(){
        $this->render('tipousuariogym/newTipoUsuarioGym.php');
    }
//guarda en la base de datos
public function createTipoUsuarioGym() {
    if(isset($_POST['txtNombre'])) {
        $nombre = $_POST['txtNombre'] ?? null;
        //Creamos instancia del modelo rol
        $tipoUsarioGymObj= new TipoUsuarioGymModel();
    $tipoUsarioGymObj->saveTipoUsuarioGym($nombre);
    $this->redirectTo("tipousuariogym/view");
    }
}
    public function viewTipoUsuarioGym($id) {
        $tipoUsarioGymObj = new TipoUsuarioGymModel();
        $tipoUsuarioGymInfo =  $tipoUsarioGymObj->getTipoUsuarioGym($id);
        $data = [
            "tipousuariogym" =>  $tipoUsuarioGymInfo,
        ];
        $this->render('tipousuariogym/viewOneTipoUsuarioGym.php', $data);
    }

    public function editTipoUsuarioGym($id){
        $tipoUsarioGymObj = new TipoUsuarioGymModel();
        $tipoUsuarioGymInfo = $tipoUsarioGymObj->getTipoUsuarioGym($id);
        $data = [
            "tipousuariogym" => $tipoUsuarioGymInfo
        ];
        $this->render('tipousuariogym/editTipoUsuarioGym.php', $data);
    }

    public function updateTipoUsuarioGym(){
        if(isset($_POST['txtNombre'])){
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $tipoUsarioGymObj = new TipoUsuarioGymModel();
            $resp = $tipoUsarioGymObj->editTipoUsuarioGym($id, $nombre);
        }
        header('Location: /tipousuariogym/view');
    }
    public function deleteTipoUsuarioGym($id) {
        $tipoUsarioGymObj  = new TipoUsuarioGymModel();
        $result = $tipoUsarioGymObj ->deleteTipoUsuarioGym($id);
        if ($result) {
            $this->redirectTo("tipousuariogym/view");
        } else {
            echo "Error al eliminar";
        }
    }
}
