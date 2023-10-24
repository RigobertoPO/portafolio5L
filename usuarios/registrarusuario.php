<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../img/logo.png"
                    style="width: 65px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Registro de nuevo usuario</h4>
                </div>
                
                <form action="crearusuario.php" method="post">
                  <p>Introduce tus datos</p>
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

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  type="submit" value="Crear cuenta">
                  </div>                 
                </form>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>