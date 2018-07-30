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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

  </head>

  <body class="login">
  <style>
  body{
    background: transparent;
    overflow-x: hidden;
  }
  html{
    background: url("images/test.png") left bottom no-repeat , linear-gradient(to bottom, #f9bc02, #F5CC47, #ffde7c);
    width: 100%;
    height: 100%;
  }
  .clearing{
    clear: both !important;
  }
  .center-align{
    text-align: center !important;
  }
  .right-align{
    text-align: right; 
  }

  .content-logo{
    background: rgba(249,188,2,.96);
    border:0;
  }
  .logo img{
    width: 40%;
  }
  .main-login{
    margin-top:-1px; 
  }
  .icon-user img{
    width: 15%;
  }
  .card-form{
    margin-top: 30px;
    background: rgba(255,255,255,.8);
    padding: 50px 20px 20px;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
  }
  .title-sistema{
    font-size: 28px;
  }
  .title-form{
    position: absolute;
    background: #E1993F;
    color: #fff;
    top: 0px;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    padding: 15px; 
    width: 60%;
    text-align: center;
    font-size: 25px;
  }
  .information-login{
    margin-top: 10px;
  }
  .acceso-proveedores{
    padding-top: 25px;
    padding-right: 25px;
  }
  .acceso-proveedores a{
    font-size: 23px;
    color: #4F350D;
    text-shadow: 1px 1px #8c6400;
  }
  
</style>

    <div class="row">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="form login_form">
        @if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif
          <!-- Logo -->
    <div class="col-md-12 content-logo">
      <div class="col-md-4 logo">
        <img class="logo-dao" src="images/logo.png" alt="Logo Delegacion Alvaro Obregon" width="100%" >
      </div>
    </div>
    <div class="row">
      <div class="container main-login">
        <div class="center-align icon-user">
          <img src="images/user3.png" alt="User-login">
          <h1 class="title-sistema">Sistema Delegacional de Almacén</h1>
        </div>
        <div class="card-form col-md-6 col-md-offset-3">
          <div class="title-form">
            Restablecer Contraseña
          </div> 
          <form role="form" method="POST" action="{{ url('/reset-contrasena') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="[object Object]">Igresa tu correo</label>
              <input type="email" class="form-control" placeholder="Correo"
                name="email" />
              @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div>
            <div class="footer text-center">
              <button id="login" type="submit" class="btn btn-fill btn-success btn-wd"><i class="fa fa-sign-in" aria-hidden="true"></i> Enviar correo</button>
              <a href="{{ url('/login') }}"><button type="button"  class="btn btn-fill btn-danger btn-wd"><i class="fa fa-reply" aria-hidden="true"></i> Regresar</button></a>
            </div>
            </div>
            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div class="center-align">
                <p> Dirección de Recursos Materiales y Servicios Generales, Coordinación de Adquisiciones y Arrendamientos.
  </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
