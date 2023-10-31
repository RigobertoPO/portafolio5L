<?php
$idUsuario=$_GET['id'];
echo $idUsuario;
include_once '../Core/usuario.php';
$usuario=new Usuario();
$resultado=$usuario->EliminarUsuario($idUsuario);
if ($resultado==true){
    header("Location: administrarusuarios.php");
}

?>