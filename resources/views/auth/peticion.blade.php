<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PayApp ©  2018</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{asset('vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">

    <script type="text/javascript">
    var _userway_config = {
    // uncomment the following line to override default position
    position: 5,
    // uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)
     language: 'es',
    // uncomment the following line to override color set via widget
     //color: '#eed81e',
    account: 'WPGtFQ2cby'
    };
    </script>
    <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
  </head>

<body class="login">
<style>
  body{
    background: transparent;
    overflow-x: hidden;
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
    background: #fff;
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
    background: rgb(12, 172, 0);
    color: #fff;
    top: 0px;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    padding: 15px 40px;
    width: 80%;
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
    <!-- Logo -->
    <div class="col-md-12 content-logo">
      <div class="col-md-4 logo">
        <br>
      </div>
    </div>
  </div>
  <div class="row">

    <!-- Formulario de Sesión -->
    <div class="container main-login">
       <div class="form login_form">
                @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                @endif
        </div>
      <div class="center-align icon-user" style="padding-top: 115px; padding-bottom: 50px;">
        <img src="{{asset('images/logopayapp.png')}}" alt="User-login">
      </div>  
      <div class="center-align icon-user">
        <h1 class="title-sistema">Sistema de Prepago PayApp</h1>
      </div>
      <div class="card-form col-md-6 col-md-offset-3">
        <div class="title-form">
         Ingresa el token, que haz recibido.
        </div>

        <form role="form" method="POST" class="col-md-10 col-md-offset-1" action="{{ url('/login') }}">
          {{ csrf_field() }}
          <div class="login_wrapper">

          <div class="form-group">
            <input type="number" maxlength="4" minlength="4" class="form-control" placeholder="Token (4 dígitos)"
              name="token" required />
            <input type="hidden" name="token_d" value="{{$token_d}}">  
            <input type="hidden" name="token_p" value="{{$pass}}"> 

            
          </div>
          <!--
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label>Tiempo de Sesion</label>
            <select class="form-control" required>
              <option value="">Selecciona una opción</option>
              <option value="1">5 Minutos</option>
              <option value="2">15 Minutos </option>
              <option value="3">30 Minutos</option>
              <option value="4">1 Hora</option>
            </select>
          </div>-->
          <div>
            <div class="text-center">
              <button id="login" type="submit" class="btn btn-fill btn-warning btn-wd" style="background: rgb(12, 172, 0); border: none;"><i class="fa fa-sign-in" aria-hidden="true"></i> Acceder</button>
            </div>

          </div>
        </form>
        <div class="clearing"></div>
        
      </div>
    </div> <!-- Termina Formulario -->
  </div> <!-- Cierra Row -->
  <div class="clearing"></div>
</body>
</html>
<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- PNotify -->
<script src="{{asset('vendors/pnotify/dist/pnotify.js')}}"></script>
<script src="{{asset('vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
<script src="{{asset('vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>

<script>
// Get IE or Edge browser version
var version = detectIE();

if (version === false) {


} else if (version >= 12) {
  new PNotify({
    title: 'Actualice su Navegador',
    text: 'El sistema requiere un navegador con soporte HTML5 para poder usar este sistema es necesario que actualice el suyo o bien utilice alguno de los que proponemos a continuación: Google Chrome o Mozilla Firefox.',
    hide: false,
    styling: 'bootstrap3'
  });
} else {
  new PNotify({
    title: 'Actualice su Navegador',
    text: 'El sistema requiere un navegador con soporte HTML5 para poder usar este sistema es necesario que actualice el suyo o bien utilice alguno de los que proponemos a continuación: Google Chrome o Mozilla Firefox.',
    hide: false,
    styling: 'bootstrap3'
  });
}

function detectIE() {
  var ua = window.navigator.userAgent;

  // Test values; Uncomment to check result …

  // IE 10
  // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';
  
  // IE 11
  // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';
  
  // Edge 12 (Spartan)
  // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';
  
  // Edge 13
  // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

  var msie = ua.indexOf('MSIE ');
  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
  }

  var trident = ua.indexOf('Trident/');
  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf('rv:');
    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  var edge = ua.indexOf('Edge/');
  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
  }

  // other browser
  return false;
}
</script> 

