<?php

    include_once('../Models/m_usuario.php');

    $email = $_POST['email'];
    $pass = sha1(md5($_POST['pass']));

    $usuario = new Usuario();
    $consultar = $usuario->consultarUsuario($email);
    $id_usuario = $consultar['id_usuario'];

    if($consultar['email'] == NULL){
        header('Location: http://'.$_SERVER['SERVER_NAME'].'/curso/index.php?error=4');
    }elseif($consultar['email'] !== NULL){
        if($consultar['id_estatus'] == 2){
            header('Location: http://'.$_SERVER['SERVER_NAME'].'/curso/index.php?error=2');
        }elseif($consultar['id_estatus'] == 3){
            header('Location: http://'.$_SERVER['SERVER_NAME'].'/curso/index.php?error=3');
        }else{
            if($consultar['password'] !== $pass){
                $intento = $usuario->intentoFallido($email);
                $contador = $consultar['intentos'];
                if($contador >= 3){
                    $bloquear = $usuario->bloquearUsuario($id_usuario);
                    header('Location: http://'.$_SERVER['SERVER_NAME'].'/curso/index.php?error=3');    
                }else{
                    header('Location: http://'.$_SERVER['SERVER_NAME'].'/curso/index.php?error=1');    
                }
            }else{
                session_start();
                    $_SESSION['id_login'] = $consultar['id_login'];
                    $_SESSION['id_usuario'] = $consultar['id_usuario'];
                    $_SESSION['id_estatus'] = $consultar['id_estatus'];
                    $_SESSION['nombre'] = $consultar['nombre'];
                    $_SESSION['apellido'] = $consultar['apellido'];
                    $_SESSION['cedula'] = $consultar['cedula'];

                    $ultimo_ingreso=$usuario->registrarLogin($email);

                    header('Location: http://'.$_SERVER['SERVER_NAME'].'/curso/Views/v_dashboard.php');
            }
        }
    }
?>