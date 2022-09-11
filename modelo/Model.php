<?php

require '../modelo/Conexion.php';
error_reporting(E_ALL);

date_default_timezone_set("America/Bogota");
header('Content-Type: text/html; charset=utf-8');

setlocale(LC_ALL, "es_ES");


class Model
{
    private $con;

    public function __construct()
    {
        $this->con = new Conexion();
        date_default_timezone_set("America/Bogota");
    }


    public function guardarUsuario($nombre, $apellido, $edad)
    {
        try {
            $query  = $this->con->prepare(" INSERT INTO  users (nombre, apellido, edad) VALUES (?,?,?)  ");
            $query->bindParam(1, $nombre);
            $query->bindParam(2, $apellido);
            $query->bindParam(3, $edad);
            $query->execute();

            $this->con->close_con();

            $obj = new StdClass();
            $obj->ok = true;
            $obj->message = 'Usuario creado con exito';
            echo json_encode($obj);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
} //END CLASS
