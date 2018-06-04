<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Iniciar sesión</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nombre de usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="{{url('index')}}">Entrar</a>
                <a class="reset_pass" href="#">¿Olvidaste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">¿Eres nuevo en AIStore?
                  <a href="#signup" class="to_register"> Crea una nueva cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> AIStore</h1>
                  <p>©2018 Todos los derechos reservados. AIStore</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nombre de usuario" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="{{url('index')}}">Crear Cuenta</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">¿Ya tienes una cuenta?
                  <a href="#signin" class="to_register"> Entra </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> AIStore</h1>
                  <p>©2018 Todos los derechos reservados. AIStore. Terminos y Condiciones</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
