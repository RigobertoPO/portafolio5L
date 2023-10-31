<?php
    session_start();
    if(isset($_SESSION["correoUsuario"])){
        $correoUsuario= $_SESSION["correoUsuario"];
        $tipoUsuario=$_SESSION["tipoUsuario"];
    }else{
        $correoUsuario='';
        $tipoUsuario='';
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio</title>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <!--Menu-->
        <nav id="navbar">
            <div class="contenedor">
                <img src="../img/logo.png" alt="Logo" class="logotipo"/>
                <ul class="textoBoton" >
                    <li><a href="../index.php" class="Seleccionado">Inicio</a></li>
                    <li><a href="../quien.php">Quien soy</a></li>
                    <?php
                    if($tipoUsuario==1){
                        echo '<li><a href="../Administracion/portafolio.php">PortaFolio</a></li>';
                        echo '<li><a href="../Administracion/pedidos.php">Pedidos</a></li>';
                        echo '<li><a href="Usuarios/administrarusuarios.php">Usuarios</a></li>';
                    }
                    ?>
                    <li><a href="../blog.php">blog</a></li>
                    <li><a href="../contacto.php">Contactos</a></li>
                    <li>
                        <?php
                        if($correoUsuario==''){
                            echo '<a class="sesion" href="../login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<p>'.$correoUsuario.'</p>';
                            echo '<a class="sesion" href="../logout.php">Cerrar sesión</a>';
                        }
                        ?>
                        
                    </li>
                </ul>          
            </div>
        </nav> 
       <div id="mostrarSlider">
        <div class="Slider-banner">
            <h1>Usuarios</h1> 
            <p class="large">Ingeniero de software</p>
        </div>
       </div>
   </header>
  
   <section >
     <h1>Administración de las cuentas de usuario</h1> 
     <a href="nuevousuario.php" class="btn btn-primary">Nuevo</a> 
      <table class="table table-light">
      <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Tipo usuario</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
       </thead>
        <tbody>
            <?php
                include_once '../Core/usuario.php';
                $usuario=new Usuario();
                $resultado=$usuario->ObtenerUsuarios();
                foreach ($resultado as $item) {
                    echo "<tr>";
                    echo "<td>".$item['Id']."</td>";
                    echo "<td>".$item['NombreCompleto']."</td>";
                    echo "<td>".$item['CorreoElectronico']."</td>";
                    switch ($item['Tipo']) {
                        case 1:      
                            echo "<td>Administrador</td>";
                            break;
                        case 2:
                            echo "<td>Cliente</td>"; 
                            break;
                        }
                    echo '<td><a href="eliminarusuario.php?id='.$item["Id"].'"><img src="../img/Cancelar.png"/></a></td>';
                    echo '<td><img src="../img/Editar.png"/></td>';
                }
            ?>
        </tbody>
      </table> 
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
</body>
</html>