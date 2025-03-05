<?php

namespace App\Controllers;

use App\Models\CentroFormacionModel;
use App\Models\ProgramaFormacionModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/ProgramaFormacionModel.php';

class ProgramaFormacionController extends BaseController
{
    public function index()
    {
        echo '<br>CONTROLLER> ProgramaFormacionController';
        echo '<br>ACTION> index';
        $this->redirectTo("programaFormacion/view");
    }

    public function view()
    {
        // Llamamos al modelo de ProgramaFormacion
        $programaFormacionObj = new ProgramaFormacionModel();
        $programaFormacion = $programaFormacionObj->getAll();
        // Llamamos a la vista
        $this->render('programaFormacion/viewProgramaFormacion.php', ["programaFormacion" => $programaFormacion]);
    }

    public function newProgramaFormacion()
    {
        $this->render('programaFormacion/newProgramaFormacion.php');
    }

    public function createProgramaFormacion()
    {
        if (isset($_POST['txtCodigo']) && isset($_POST['txtNombre']) && isset($_POST['fkidcentroformacion'])) {
            $codigo = $_POST['txtCodigo'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $fkidcentroformacion = $_POST['fkidcentroformacion'] ?? null;

            // Creamos instancia del modelo programa de formación
            $programaFormacionObj = new ProgramaFormacionModel();
            // Se llama al método que guarda en la base de datos
            $res = $programaFormacionObj->saveProgramaFormacion($codigo, $nombre, $fkidcentroformacion);
            $this->redirectTo("programaFormacion/view");
        }
    }
    public function viewProgramaFormacion($id)
{
    $programaFormacionObj = new ProgramaFormacionModel();
    $programaInfo = $programaFormacionObj->getProgramaFormacion($id);
    $data = [
        "programa" => $programaInfo,
    ];
    $this->render('programaFormacion/viewOneProgramaFormacion.php', $data);
}

    public function editProgramaFormacion($id) {
        $programaFormacionObj = new ProgramaFormacionModel();
        $programaInfo = $programaFormacionObj->getProgramaFormacion($id);
        $objCentro = new CentroFormacionModel();
        $centroInfo = $objCentro->getAll();
        $data = [
            "centros" => $centroInfo,
            "programa" => $programaInfo
        ];
        $this->render('programaFormacion/editProgramaFormacion.php', $data);
    }

    public function updateProgramaFormacion() {
        if (isset($_POST['txtId']) && isset($_POST['txtCodigo']) && isset($_POST['txtNombre']) && isset($_POST['fkidcentroformacion'])) {
            $id = $_POST['txtId'] ?? null;
            $codigo = $_POST['txtCodigo'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $fkidcentroformacion = $_POST['fkidcentroformacion'] ?? null;

            $programaFormacionObj = new ProgramaFormacionModel();
            $res = $programaFormacionObj->editProgramaFormacion($id, $codigo, $nombre, $fkidcentroformacion);
            $this->redirectTo("programaFormacion/view");
        }
    }
    public function deleteProgramaFormacion($id) {
        $programaFormacionObj = new ProgramaFormacionModel();
        $result = $programaFormacionObj->deleteProgramaFormacion($id);
        if ($result) {
            $this->redirectTo("programaFormacion/view");
        } else {
            echo "Error al eliminar el programa.";
        }
    }
}