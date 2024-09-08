<?php
include_once '../modelo/Usuario.php'
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $usuario = new Usuario();
    $usuario->Loguearse($user,$pass);

    if(!empty($usuario->objetos as $objeto))
        foreach($usuario->objetos as $objeto) {
            $_SESSION['usuario']=$objeto->id_usuario;
    }
?>    