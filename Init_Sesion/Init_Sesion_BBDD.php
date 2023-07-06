<?php

require_once '../BBDD/Conexion/Connection.php';
require_once './Models/Init_Sesion_Register.php';
require_once './Models/Init_Sesion_Valid_User.php';
require_once './Models/Init_Sesion_Sesion_User.php';

class InitSesionUser extends Connection{
    
    public function __construct() {
        return parent::__construct();
    }
    
    // CON ESTA FUNCION SE REGISTRAN LOS USUARIOS LLAMANDO U PROCEDIMIENTO ALMACENADO
    public function registredUser(ModelRegistredUser $ru){
        try {
            $prepare = $this->conexion->prepare("call sp_register_user(?,?,?,?)");
            $prepare->bindValue(1,$ru->GetTel(),PDO::PARAM_STR);
            $prepare->bindValue(2,$ru->GetNom(),PDO::PARAM_STR);
            $prepare->bindValue(3,$ru->GetCiu(),PDO::PARAM_STR);              
            $prepare->bindValue(4,$ru->GetConts(),PDO::PARAM_STR);
            $result = $prepare->execute();
            $prepare->closeCursor();
        } catch (Exception $ex) {
            echo 'EEROR DE REGISTRO '.$ex->getMessage();
        } finally {
            $this->conexion = null;
        }  
        return $result;
    }
    
    // ESTA FUNCION VALIDA QUE EL USUARIO ESTE O NO ESTE REGISTRADO PARA EL PREVIO REGISTRO
    //LLAMANDO UN PROCEDIMIENTO ALMACENADO
    public function ValidRegistred(ValidUser $vd){
        try {
            $prepare = $this->conexion->prepare("call sp_valid_User(?)");
            $prepare->bindValue(1,$vd->GetUser(), PDO::PARAM_STR);
            $prepare->execute();
            $result = $prepare->fetchall(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            echo 'ERROR '.$ex->getMessage();
        } finally {
            $this->conexion = null;
        }
        return $result;
    }
    
    // CON ESTA FUNCION EL USUARIO PUEDE INICIAR SESION LLAMANDO UN PROCEDIMIENTO ALMACENADO
    public function initSesionUser(InitSesion $is){
        try {
            $prepare = $this->conexion->prepare('call sp_init_Sesion(?,?)');
            $prepare->bindValue(1,$is->GetTel(), PDO::PARAM_STR);
            $prepare->bindValue(2,$is->GetPass(), PDO::PARAM_STR);
            $prepare->execute();
            $result = $prepare->fetchall(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            echo 'ERROR '.$ex->getMessage();
        } finally {
            $this->conexion = null;
        }
        return $result;
    }
    
    // CON ESTA FUNCION TRAEMOS LAS CUIDADES DE LA BASE DE DATOS 
    //ES UN CATALOGO
    public function ViewCitys(){
        try {
            $prepare = $this->conexion->prepare('call sp_view_citys()');
            $prepare->execute();
            $result = $prepare->fetchall(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            ECHO 'ERROR '.$ex->getMessage();
        } finally {
            $this->conexion = null;
        }
        return $result;
    }
}
