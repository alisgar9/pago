<!--<link href="{{asset('css/file.css')}}" rel="stylesheet">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
<style media="screen">
  body{
    font-family: 'Roboto', sans-serif;
    background-color: #e2e2e2;
  }
  hr{
    margin: 0 !important;
  }
  .mayus{
    text-transform: uppercase;
  }
  .margen {
      font-size: 15px;
      width: 80%;
      height: 35px;
      margin: 15px;
      border-radius: 7px;
      border: 2px solid grey;
  }
  div > input:focus{
    background: #ea63fe26;
    border: 0;
  }
  .boton-stylo{
    width: 200px;
    font-size: 17px;
    height: 40px;
    cursor: pointer;
    background-color: #0579bd;
    border: 0;
    color: #fff;
  }
  .boton-stylo:hover{
    background: black;
    box-shadow: 2px 3px 4px 1px #bfbfbf;
  }
  .titulo{
    display: flex;
    justify-content: space-around;
  }
  .estilo{
    border:#f9cc33 5px solid;
  }
  .titulos{
    color:#f933bc;
  }
  .texto{
    display: flex;
  }
  .estilo-inputo-dos:hover{
    border: #f9cc33 1px solid;
  }
  .form-control {
    display: block;
    width: 80%;
    padding: 6px 12px;
    padding: .375rem .75rem;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
  }
  div > input:focus {
      background: #f9cd3321;
  }
  /* CUSTOM */
  .logo-ao{
    padding-top: 20
  }
  .logo-ao img{
    width: 100%;
  }
  .right-align{
    text-align: right;
  }
  .title-card{
    text-align: center;
    margin-bottom: 20px;
  }
  .titulo{
    background: #fff;
    padding-bottom: 20px;
  }
  .card{
    background: #fff;
    margin-top: 30px;
    padding-top: 20px;
    padding-bottom: 50px;
    border-radius: 10px;
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
  }
  .form-group {
    margin-bottom: 30px;
  }
  .input-group > input[type=text],
  .input-group > input[type=email],
  .input-group > input[type=password]{

    font-size: 16px;
  }


  .gris{
     -moz-filter: grayscale(100%);
     -webkit-filter: grayscale(100%);
     filter: gray;
     filter: grayscale(100%);
  }

</style>
  <div class="row titulo gris">
    <div class="container">
      <div class="col-md-5 logo-ao">
        <img src="{{asset('images/portal.jpg')}}">
      </div>
    <div class="col-md-7 right-align">
      <h2>Sistema de Registro al Directorio de Proveedores y Prestadores de Servicio</h2>
    </div>
    </div>
  </div>
  <hr class="estilo gris">
  <div class="row">
    <div class="container">
      <div class="card col-md-10 col-md-offset-1">
        <div class="col-md-12 title-card gris">
          <?php Session::push('user.teams', 'developers'); ?>
          <h2>REGISTRO DE PROVEEDORES</h2>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <form method="post" action="{{ url('/Aregistro') }}" onsubmit="validateCaptcha()" id="frmRegister" role="form">
            {{ csrf_field() }}
            <div class="form-group col-md-6">
              <label for="rfc">RFC</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="rfc" value="{{ old('rfc') }}" name="rfc" maxlength="13" placeholder="RFC" required="required">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Correo Electrónico</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electónico" required="required">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="contra">Contraseña</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="contra" name="contra" maxlength="20" required="required">
              </div>
              <br>
            <div class="col-md-12">
              <span id="result"></span>
            </div>
            </div>
            <div class="form-group col-md-6">
              <label for="contra">Confirmar Contraseña</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="contraconfir" name="contraconfir" onchange="validarContraseña(this);" maxlength="20" required="required">
              </div>
              <div class="col-md-12">
                <span class="mensaje" id="mensaje"></span>
              </div>
            </div>
            <div class="col-md-10 gris" align="right" style="display: flex; justify-content: space-between;">
              <a href="#" class="btn" data-toggle="modal" data-target="#miModal"> <span class="glyphicon glyphicon-question-sign"></span> ¿Necesita Ayuda?</a>
              <button type="submit" name="button" class="boton-stylo gris" >Registrar</button>
            </div>
    
          <div class="col-md-12">
            <br>
            <div id="signin_errors" class="gris"></div>
            <div class="g-recaptcha gris" data-sitekey="6Le8qlYUAAAAAO7YTFOkXFvrGtWq3tsR46ImCqD2"></div>
              <script src='https://www.google.com/recaptcha/api.js'></script>
          </div>
          </form>
        </div>
      </div> <!-- Termina Card -->
    </div> <!-- Termina Container -->
  </div> <!-- Termina Row -->
<script>

function validarContraseña(){


  var p1 = document.getElementById("contra").value;
  var p2 = document.getElementById("contraconfir").value;
  var espacios = false;
  var cont = 0;

  if (p1 != p2) {
    $(".mensaje").html("<p></p>");
    $(".mensaje").append("<p class='short'>Las contraseñas no son las mismas</p>");
    return false;
  } else {
    $(".mensaje").html("<p></p>");
    $(".mensaje").append('<p class="strong">Las contraseñas coinciden correctamente</p>');
    return true;
  }



}

<?php



function siteURL() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
    $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}
?>
 function validateCaptcha() {
   var response = grecaptcha.getResponse();
   if(response.length == 0){

     $('#result').removeClass();
     $('#result').addClass('weak');
     $('#result').html('Por favor válide el elemento de seguridad (reCaptcha)');
     setTimeout(function() {
      $('#result').html('');
   }, 3000);
    document.getElementById("frmRegister").reset();
   }
 }
</script>

<div class="modal fade gris" id="miModal" tabindex="-1" role="dial3000" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">  <span class="glyphicon glyphicon-question-sign"></span>  Guía de registro para proveedores.</h4>
      </div>
      <div class="modal-body">
        Este sistema le permitirá realizar el proceso de registro al directorio para ser proveedor de la Delegación Alvaro Obregón.
        <br>
        <br>
        El proceso de registro al directorio de proveedores contempla la captura de información de las personas físicas y/o morales,  solicitando la siguiente documentación:
        <br>
        <br>
        <h2>Documentación General</h2>
<ul>
     <li>Carta de presentación dirigida al C. JUAN MANUEL CORTÉS RICO, DIRECTOR DE RECURSOS MATERIALES Y SERVICIOS GENERALES.
      </li><li> Comprobante del Domicilio Fiscal (no mayor a tres meses)
      </li><li> Identificación Oficial vigente de la PF o Representante Legal
      </li><li> Registro Federal de Contribuyentes (RFC)
      </li><li> Currículum Empresarial
      </li><li> Catálogo de Productores (en caso de contar con el)
      </li><li> Manifiesto de no conflicto de intereses en hoja membretada
      </li><li> Última declaración anual de ISR y sus respectivos pagos (ejercicio inmediato anterior a la fecha de registro)
      </li><li> Acuse de ingreso a la DRF de la Constancia de Registro de Cuenta Bancaria ante la Secretaria de Finanzas www.finanzas.cdmx.gob.mx (Opcional)
  </li></ul>

<h2>Documentación personas físicas</h2>
<ul>
  <li>
   Acta de Nacimiento</li>
  <li>
   CURP</li>
</ul>

<h2>Documentación personas morales</h2>
<ul>
  <li> Acta Constitutiva (y modificaciones a la misma si la hubiere), poder notarial del representante legal (en su caso)</li>
  <li> Poder Notarial del Representante Legal (en su caso)</li>
</ul>


      </div>
    </div>
  </div>
</div>
<style>
.contenedor-modal {
  position: absolute;
  width: 100%;
  height: 100%;
  text-align: center;
}

.contenedor-modal button {
  position: relative;
  top: 40%;
}

.short{
font-weight:bold;
color:#FF0000;
font-size:larger;
}
.weak{
font-weight:bold;
color:orange;
font-size:larger;
}
.good{
font-weight:bold;
color:#2D98F3;
font-size:larger;
}
.strong{
font-weight:bold;
color: limegreen;
font-size:larger;
}
</style>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="js/jquery.validate.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5lIx1RcJ498zeYUlSrqeoSzoF1XQUDhq";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
<script>
var $form = $("form"),
$successMsg = $(".alert");
$.validator.addMethod("letters", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});
$form.validate({

  rules: {
    rfc: {
      required: true,
      minlength: 3,
      validaRFC: true

    },
    email: {
      required: true,
      email: true
    },
      contra: {
           required: true,
           minlength: 5,
           pwcheck: true
       },
       contraconfir: {
           required: true,
           minlength: 5,
           equalTo: "#contra"
       }
  },
  messages: {
     rfc: "El RFC proporcionado es inválido",
     email: "El correo es erroneo favor de verificar",
     contra: "La contraseña debe tener al menos una minúscula y un número",
     contraconfir: "No coinciden las contraseñas"
  },
  errorPlacement: function(error, element) {
      if( element.is(':radio') || element.is(':checkbox')) {
        //  error.appendTo(element.parent());
      } else {
        //  error.insertAfter(element);
      }
  },//end errorPlacement
  showErrors: function(errorMap, errorList) {
      /*if (submitted) {
          var summary = "<br> <br/>";
          $.each(errorList, function() { summary += " * " + this.message + "<br/>"; });
          $("#signin_errors").html(summary);
          submitted = false;
      }*/
      this.defaultShowErrors();
  },
  invalidHandler: function(form, validator) {
      submitted = true;
  }
});

//Función para validar un RFC
// Devuelve el RFC sin espacios ni guiones si es correcto
// Devuelve false si es inválido
// (debe estar en mayúsculas, guiones y espacios intermedios opcionales)
function rfcValido(rfc, aceptarGenerico = true) {
    return true;
    const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    var   validado = rfc.match(re);

    if (!validado)  //Coincide con el formato general del regex?
        return false;

    //Separar el dígito verificador del resto del RFC
    const digitoVerificador = validado.pop(),
          rfcSinDigito      = validado.slice(1).join(''),
          len               = rfcSinDigito.length,

    //Obtener el digito esperado
          diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
          indice            = len + 1;
    var   suma,
          digitoEsperado;

    if (len == 12) suma = 0
    else suma = 481; //Ajuste para persona moral

    for(var i=0; i<len; i++)
        suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
    digitoEsperado = 11 - suma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    else if (digitoEsperado == 10) digitoEsperado = "A";

    //El dígito verificador coincide con el esperado?
    // o es un RFC Genérico (ventas a público general)?
    if ((digitoVerificador != digitoEsperado)
     && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
        return false;
    else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
        return false;
    return rfcSinDigito + digitoVerificador;
}


//Handler para el evento cuando cambia el input
// -Lleva la RFC a mayúsculas para validarlo
// -Elimina los espacios que pueda tener antes o después
function validarInput(input) {
  //  var rfc         = input.value.trim().toUpperCase(),
    //    resultado   = document.getElementById("resultado"),
        valido;

    var rfcCorrecto = rfcValido(rfc);   // ⬅️ Acá se comprueba
    if (rfcCorrecto) {
    	valido = "Válido";
      resultado.classList.add("ok");
    } else {
    	valido = "No válido"
    	resultado.classList.remove("ok");
    }

    resultado.innerText = "RFC: " + rfc
                        + "\nResultado: " + rfcCorrecto
                        + "\nFormato: " + valido;
}

//valida rfc
var response;
   $.validator.addMethod(
       "validaRFC",
       function(value, element) {
         var rfcCorrecto = rfcValido(value);
         if (rfcCorrecto) {
         response = true;
         } else {
         response = false;
         }
        return response;
    },
          "RFC inválido"
   );
//password streenght
   $.validator.addMethod("pwcheck", function(value) {
      return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
          && /[a-z]/.test(value) // has a lowercase letter
          && /\d/.test(value) // has a digit
   });

   $(document).ready(function() {
   $('#contra').keyup(function() {
   $('#result').html(checkStrength($('#contra').val()))
   })
   function checkStrength(password) {
   var strength = 0
   if (password.length < 6) {
   $('#result').removeClass()
   $('#result').addClass('short')
   return 'Contraseña muy debíl.'
   }
   if (password.length > 7) strength += 1
   // If password contains both lower and uppercase characters, increase strength value.
   if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
   // If it has numbers and characters, increase strength value.
   if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
   // If it has one special character, increase strength value.
   if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
   // If it has two special characters, increase strength value.
   if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
   // Calculated strength value, we can return messages
   // If value is less than 2
   if (strength < 2) {
   $('#result').removeClass()
   $('#result').addClass('weak')
   return 'Contraseña muy sencilla.'
   } else if (strength == 2) {
   $('#result').removeClass()
   $('#result').addClass('good')
   return 'Bien, Contraseña fuerte.'
   } else {
   $('#result').removeClass()
   $('#result').addClass('strong')
   return 'Bien, Contraseña muy fuerte.'
   }
   }
   });
</script>
