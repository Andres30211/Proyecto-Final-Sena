<?php

require_once './Init_Sesion_BBDD.php';
require_once './Models/Init_Sesion_Register.php';
require_once './Models/Init_Sesion_Valid_User.php';
require_once './Models/Init_Sesion_Sesion_User.php';

// VALIDAMOS QUE SI LLEGUEN LOS DATOS DE JAVASCRIPT DE LA FUNCION ASINCRONA
// PARA REGISTRAR LOS USUARIOS
if ($_POST['funcion'] === 'registrar') {

    $data       = json_decode($_POST['datos']);
    $nombre     = $data->nombreCompleto;
    $ciudad     = $data->ciudad;
    $telefono   = $data->telefono;
    $contrasena = $data->contrasena;
    
    $validar = new InitSesionUser();
    $val     = $validar->ValidRegistred(new ValidUser($telefono));

    if (!empty($val)) {
        echo 'existe';
    } else {
        $resgistrar = new InitSesionUser();
        $valid = $resgistrar->registredUser(new ModelRegistredUser($nombre,$ciudad, $telefono, $contrasena));

        if ($valid === true) {
            echo 'registrado';
        }
    }
    
    // VALIDAMOS QUE SI LLEGUEN LOS DATOS DE JAVASCRIPT DE LA FUNCION ASINCRONA
// PARA INICIAR SESION
}else if($_POST['funcion'] === 'initSesion'){

    $data       = json_decode($_POST['datos']);
    $telefono   = $data->celular;
    $contraseña = $data->contrasena;

    $Init   = new InitSesionUser();
    $valid  = $Init->initSesionUser(new InitSesion($telefono, $contraseña));

    if (!empty($valid)) {
        session_start();
        foreach ($valid as $u) {
            $_SESSION['id_user']    = $u->id_user;
            $_SESSION['rol']        = $u->rol;
        }
        
        $jsonData = array();
        $jsonData[] = array(
            'resp'  => 'init',
            'rol'   => $_SESSION['rol']
        );

        $jsonString = json_encode($jsonData[0]);
        echo $jsonString;
        
    } else if (empty($valid)) {

        $jsonData   = array();
        $jsonData[] = array(
            'resp'  => 'noinit'
        );

        $jsonString = json_encode($jsonData[0]);
        echo $jsonString;
    } 
    
    // VALIDAMOS QUE SI LLEGUEN LOS DATOS DE JAVASCRIPT DE LA FUNCION ASINCRONA
// PARA MOSTRAR LAS CIUDADES
}else if($_POST['funcion'] === 'mostrarCiudad'){
    
    $city = array();
    
    $citys = new InitSesionUser();
    $viewCitys = $citys->ViewCitys();
    
    foreach ($viewCitys as $ciudad){
        $city[] = array(
            'citys' => $ciudad->city
        );
    }
    
    $jdata = json_encode($city);
    echo $jdata;
}