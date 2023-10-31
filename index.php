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
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!--Menu-->
        <nav id="navbar">
            <div class="contenedor">
                <img src="img/logo.png" alt="Logo" class="logotipo"/>
                <ul class="textoBoton" >
                    <li><a href="index.php" class="Seleccionado">Inicio</a></li>
                    <li><a href="quien.php">Quien soy</a></li>
                    <?php
                    if($tipoUsuario==1){
                        echo '<li><a href="Administracion/portafolio.php">PortaFolio</a></li>';
                        echo '<li><a href="Administracion/pedidos.php">Pedidos</a></li>';
                        echo '<li><a href="Usuarios/administrarusuarios.php">Usuarios</a></li>';
                    }
                    ?>
                    <li><a href="blog.php">blog</a></li>
                    <li><a href="contacto.php">Contactos</a></li>
                    <li>
                        <?php
                        if($correoUsuario==''){
                            echo '<a class="sesion" href="login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<p>'.$correoUsuario.'</p>';
                            echo '<a class="sesion" href="logout.php">Cerrar sesión</a>';
                        }
                        ?>
                        
                    </li>
                </ul>          
            </div>
        </nav> 
       <div id="mostrarSlider">
        <div class="Slider-banner">
            <h1>Rigoberto Pérez Ovando</h1> 
            <p class="large">Ingeniero de software</p>
        </div>
       </div>
   </header>
  
   <section id="Portafolio">
       <div class="Contenedor">
           <div class="portafolio-nav">
               <ul class="textoBoton">
                    <li><a href="">Web</a></li>
                    <li><a href="">Móvil</a></li>
                    <li><a href="">Escritorio</a></li>
               </ul>
           </div>
       </div>
       <div class="Portafolio-content">
            <div class="Caja">
                <a href="http://">
                    <img src="img/web.png" alt="web">
                    <p>Sitio punto de venta</p>
                </a>               
            </div>
       </div>
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
</body>
</html>