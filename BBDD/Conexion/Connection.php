<?php

class Connection {
    protected $conexion;
    
    public function __construct() {
        //ESTA ES LA CONEXION  A LA BASE DE DATOS MYSQL
        try {
            $this->conexion = new PDO("mysql:host=localhost:3308; dbname=bbdd_busca_tu_documento","root","andres");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conexion;
        } catch (Exception $ex) {
            echo 'Error de conecion '.$ex->getMessage();
        }
    }
    
    //ESTA FUNCION ES PARA VALIDAR LA CONEXION A LA BASE DE DATOS
//    public function VerificarConexion(){
//        if($this->conexion){
//            echo 'estas conectado';
//        }else{
//            echo 'no estas conectado';
//        }
//    }
}
