<?php
namespace App\Models;
use PDO;
use PDOException;

abstract class BaseModel
{
    protected $dbConnection;
    protected $table;

    public function __construct()
    {
    try {
        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $dsn = DRIVER.':host='.HOST.';dbname='.DATABASE;
        $this->dbConnection = new PDO($dsn, USERNAME_DB, PASSWORD_DB, $options);

    } catch (PDOException $ex) {
        echo "Error>".$ex->getMessage();
    }
   
 }//cierra constructor

 public function getall():array
 {
    try {
        $sql = "SELECT * FROM $this->table";
        $statement = $this->dbConnection->query($sql);
        //Obtener resultado de la Bd en un array asociativo
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        //Devolvermos el array con los datos
        return $result;
    } catch (PDOException $ex) {
        echo "Error en consulta> {$ex->getMessage()}";
        return[];
       // echo "Error en consulta> ".$ex->getMessage();
    }
   


 }


}