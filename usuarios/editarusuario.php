<?php
$idUsuario=$_GET['id'];
include_once '../Core/usuario.php';
$usuario=new Usuario();
$resultado=$usuario->ObtenerUsuariosId($idUsuario);
if ($resultado==true){
    $nombre= $resultado['NombreCompleto'];
    $correo=$resultado['CorreoElectronico'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modificarusuario.php" method="post">
        <label for="">Id:</label>
        <input type="text" name="id" readonly value="<?php echo $idUsuario ?>">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
        <label for="">Correo:</label>
        <input type="text" name="correo" value="<?php echo $correo ?>">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>