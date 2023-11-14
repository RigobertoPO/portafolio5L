<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
if(isset($nombre) && isset($correo)){
    include_once '../Core/usuario.php';
    $user=new Usuario();
    
    $resultado=$user->ModificarUsuario($id,$nombre,$correo);
    if($resultado==true){
        echo '<script>alert("Usuario modificado")</script>';
        header("Location: administrarusuarios.php");
    }
    else{
        //echo '<script>alert("No se guardo")</script>';
        header("Location: editarusuario.php");
    }
}
else{
    //header("Location: registrarusuario.php");
}
?>