<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIDECO © Delegación Álvaro Obregón 2015 - 2018</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>


      <div class="login_wrapper">
        <div class="form login_form">
          <section>
            <figure>
              <img class="logo-dao" src="images/logo.png" alt="Logo Delegacion Alvaro Obregon" width="100%" >
            </figure>
          </section>
          <section class="login_content">
            <form role="form" method="POST" action="{{ url('/reset-contrasena') }}">
              {{ csrf_field() }}
              <h2>Inicia Sesion</h2>
              <h1>Sistema Delegacional de Compras V1.0</h1>
              <h2>Se envio un correo con los pasos para cambirar tu contraseña.</h2>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                <p> Dirección de Recursos Materiales y Servicios Generales, Coordinación de Adquisiciones y Arrendamientos.
                  </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
