<?php 

include_once "config/config.php";

class Conexion
{
    //parametros de la DB
    private $host = DB_HOST;
    private $dataBase = DB_SCHEMA;
    private $userName = DB_USER;
    private $password = DB_PASSWORD;
    private $enconding = DB_ENCONDING;
    private $conexion;

    //creamos el metodo de conexion

    public function conectar()
    {
        $this->conexion = null;

        try {
            //instanciamos la conexion con las propiedades privadas con PDO
            $this->conexion = new PDO("mysql:host=".$this->host.";dbname=".$this->dataBase, 
            $this->userName, $this->password);

           //pasamos la codificacion de la DB
            $this->conexion->exec($this->enconding);

            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Error en la conexion con la base de datos". $e->getMessage();      
        }
        //retornamos la conexion
        return $this->conexion;
    }
}

?>