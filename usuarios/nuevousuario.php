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
                        echo '<li><a href="administrarusuarios.php">Usuarios</a></li>';
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
     <h1>Agregar nuevo usuario</h1> 
     <form action="guardarusuario.php" method="post">
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Introduce tu nombre" name="nombre" />
                    <label class="form-label" for="form2Example11">Nombre</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Introduce tu correo" name="correo" />
                    <label class="form-label" for="form2Example11">Correo electrónico</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="password" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>
                  <div class="form-outline mb-4">
                    <select name="tipo" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                    </select>
                    <label class="form-label" for="form2Example22">Tipo de usuario</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  type="submit" value="Crear cuenta">
                  </div>                 
                </form>
                
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
</body>
</html>