<?php

error_reporting(E_ALL);

class Conexion extends PDO
{
    private $dbh;

    //creamos la conexión a la base de datos prueba
    public function __construct()
    {
        try {
            // $link = new PDO("mysql:host=127.0.0.1;dbname=sistema", "sylar_admin", "Sylar_Admin*2018");
            // $this->dbh = new PDO("mysql:host=localhost;dbname=habitaciones_pance", "root", "");

            $this->dbh = parent::__construct("mysql:host=localhost;dbname=formulario_php", "root", "");

            // $dbh = new PDO("mysql:host=192.168.125.13;dbname=habitaciones_pance", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function close_con()
    {
        $this->dbh = null;
    }
}
