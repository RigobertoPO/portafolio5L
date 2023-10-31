<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $tipo=$_POST['tipo'];
    if(isset($nombre) && isset($correo) && isset($password)){
        include_once '../Core/usuario.php';
        $user=new Usuario();
        
        $resultado=$user->InsertarUsuario($nombre,$correo,MD5($password),$tipo);
        if($resultado==true){
            echo '<script>alert("Usuario registrado")</script>';
            header("Location: administrarusuarios.php");
        }
        else{
            //echo '<script>alert("No se guardo")</script>';
            header("Location: nuevousuario.php");
        }
    }
    else{
        //header("Location: registrarusuario.php");
    }

?>