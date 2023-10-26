<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];

    if(isset($nombre) && isset($correo) && isset($password)){
        include_once '../Core/usuario.php';
        $user=new Usuario();
        
        $resultado=$user->InsertarUsuario($nombre,$correo,MD5($password),2);
        if($resultado==true){
            echo '<script>alert("Usuario registrado")</script>';
            header("Location: ../login.php");
        }
        else{
            echo '<script>alert("No se guardo")</script>';
            //header("Location: registrarusuario.php");
        }
    }
    else{
        //header("Location: registrarusuario.php");
    }

?>