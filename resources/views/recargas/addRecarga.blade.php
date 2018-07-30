@extends('layouts.logged')
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
   <div class="page-title">
      <div class="title_left">
         <h3>Recargas Electronicas</h3>
      </div>
   </div>
   <form role="form" method="POST" action="{{ url('/recargas-add') }}">
          {{ csrf_field() }}

          @if(session()->has('field_errors'))
                <div class="col-md-12 col-xs-12 w3-panel w3-red w3-display-container">
                  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">×</span>
                  <h3>Datos Requeridos!</h3>
                    @foreach (session()->get('field_errors')->all() as $error)
                    <div>{{ $error }}</div>
                  @endforeach
                </div>
              @endif

   <div class="col-md-4 col-xs-12">
      <div class="x_panel">
         <div class="x_title">
            <h2>Selecciona la Compañia</h2>
         </div>
         <div class="x_content">
            <br>
            <div class="form-group">
               <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <div class="col-md-6 col-xs-12 text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="1" class="sr-only" required />
                     <img src="{{asset('images/tel.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12 text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="2" class="sr-only" required  />
                     <img src="{{asset('images/amigon.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12 text-center" class="sr-only" required >
                     <label>
                     <input type="radio" id="compania" name="compania" value="3" class="sr-only" required />
                     <img src="{{asset('images/amigoi.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12 text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="4" class="sr-only" required />
                     <img src="{{asset('images/att.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12  text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="5" class="sr-only" required />
                     <img src="{{asset('images/unefon.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12 text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="6" class="sr-only" required />
                     <img src="{{asset('images/iusa.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12 text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="7" class="sr-only" required />
                     <img src="{{asset('images/movistar.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12 text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="8" class="sr-only" required />
                     <img src="{{asset('images/televia.png')}}">
                     </label>
                  </div>
                  <div class="col-md-6 col-xs-12 text-center">
                     <label>
                     <input type="radio" id="compania" name="compania" value="9" class="sr-only" required />
                     <img src="{{asset('images/alo.png')}}">
                     </label>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4 col-xs-12" id="monto">
      <div class="x_panel">
         <div class="x_title">
            <h2>Selecciona el Monto</h2>
         </div>
         <div class="x_content">
            <br>
            <div class="form-group text-center">
               <ul class="chec-radio">
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="1">
                  <div class="clab">$10.00&nbsp;&nbsp; </div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="2">
                  <div class="clab">$20.00&nbsp;&nbsp; </div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="3">
                  <div class="clab">$30.00&nbsp;&nbsp; </div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="4">
                  <div class="clab">$50.00&nbsp;&nbsp; </div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="5">
                  <div class="clab">$100.00</div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="6">
                  <div class="clab">$150.00</div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="7">
                  <div class="clab">$200.00</div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="8">
                  <div class="clab">$300.00</div>
                </label>
              </li>
              <li class="pz">
                <label class="radio-inline">
                  <input type="radio" id="mento" name="mento" class="pro-chx" value="9">
                  <div class="clab">$500.00</div>
                </label>
              </li>
            </ul>
            </div>
         </div>
      </div>
    </div>
      <div class="col-md-4 col-xs-12" id="phones">
        <div class="x_panel">
         <div class="x_title">
            <h2>Número Destinatario</h2>
         </div>
         <div class="x_content">
          <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
            <label>Compañia</label>
              <input type="text" class="form-control" id="textCompania" readonly placeholder="telcel">
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
            <label>Monto</label>
              <input type="text" class="form-control" id="textMonto" readonly placeholder="500.00">
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="phone1" style="height: 50px;font-size: 28px;" required name="phone" placeholder="5512345678">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>
                       <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" style="height: 50px;font-size: 28px;"  class="form-control" id="phone2" required name="phone" placeholder="5512345678">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>          
          <button class="btn btn-success btn-lg pull-right" type="submit">Recarga</button>
         </div>
        </div>  
      </div>  
    </form>
             
</div>

<style type="text/css">
  label > input{ /* HIDE RADIO */
  display:none;
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
  -webkit-filter: brightness(1) grayscale(2) opacity(0.5);
      
            width: 100%;
}
label > input:checked + img{ /* (CHECKED) IMAGE STYLES */
  border:2px solid #dcd4d4;
   -webkit-filter: none;
       -moz-filter: none;
            filter: none;
            -webkit-box-shadow: 2px 2px 5px #999;
  -moz-box-shadow: 2px 2px 5px #999;
}
label > input:checked + img:hover{
   /* -webkit-filter: brightness(1) grayscale(3) opacity(0.5);*/
      
}
.btn span.glyphicon {         
  opacity: 0;       
}
.btn.active span.glyphicon {        
  opacity: 1;       
}

input:required,
textarea:required {
  border-color: red !important;
}
h5{
  font-size: 18px;
}
.error
{
color:red;
font-family:verdana, Helvetica;
}
#monto, #phones {
  display: none;
}

ul.chec-radio {
    
}
ul.chec-radio li.pz {
    /*display: inline;*/
    list-style-type: none;
}
.chec-radio label.radio-inline input[type="checkbox"] {
    display: none;
}
.chec-radio label.radio-inline input[type="checkbox"]:checked+div {
    color: #fff;
    background-color: #000;
}
.chec-radio .radio-inline .clab {
    cursor: pointer;
    background: #5bc0de;
    padding: 12px 30px;
    text-align: center;
    text-transform: uppercase;
    color: #333;
    width: 200px;
    position: relative;
    height: 45px;
    float: left;
    margin: 0;
    margin-bottom: 5px;
    border-color: #46b8da;
}
.chec-radio label.radio-inline input[type="checkbox"]:checked+div:before {
    content: "\e013";
    margin-right: 5px;
    font-family: 'Glyphicons Halflings';
}
.chec-radio label.radio-inline input[type="radio"] {
    display: none;
}
.chec-radio label.radio-inline input[type="radio"]:checked+div {
    color: #fff;
    background-color: #000;
}
.chec-radio label.radio-inline input[type="radio"]:checked+div:before {
    content: "\e013";
    margin-right: 5px;
    font-family: 'Glyphicons Halflings';
}

.w3-red, .w3-hover-red:hover {
    color: #fff!important;
    background-color: #f44336!important;
}
.w3-panel {
    margin-top: 16px;
    margin-bottom: 16px;
}
.w3-container, .w3-panel {
    padding: 0.01em 16px;
}
.w3-tooltip, .w3-display-container {
    position: relative;
}
</style>

<script type="text/javascript" src="//code.jquery.com/jquery-1.5.2.js"></script>
<script type="text/javascript">

  $(document).ready(function() {

    $("input:radio[name$='compania']").click(function() {
        var test = $(this).val();
        $("#monto").show();
        var nombre = '';
         if(test == 1)
         {
           nombre = 'Telcel';
         }
         else if(test == 2)
         {
           nombre = 'Amigo sin Limite';
         }
         else if(test == 3)
         {
           nombre = 'Internet telcel Amigo';
         }
         else if(test == 4)
         {
           nombre = 'AT&T';
         }
         else if(test == 5)
         {
           nombre = 'UNEFON';
         }
         else if(test == 6)
         {
           nombre = 'IUSACELL';
         }
         else if(test == 7)
         {
           nombre = 'MOVISTAR';
         }
         else if(test == 8)
         {
           nombre = 'VIA';
         }
         else if(test == 9)
         {
           nombre = 'ALO';
         }else{
            nombre = 'Sin Valor';
         }
        $("#textCompania").val(nombre);
    });

    $("input:radio[name$='mento']").click(function() {
        var test = $(this).val();
        $("#phones").show();
        var montos = '';
        if(test == 1)
         {
           montos = '10.00';
         }
         else if(test == 2)
         {
           montos = '20.00';
         }
         else if(test == 3)
         {
           montos = '30.00';
         }
         else if(test == 4)
         {
           montos = '50.00';
         }
         else if(test == 5)
         {
           montos = '100.00';
         }
         else if(test == 6)
         {
           montos = '150.00';
         }
         else if(test == 7)
         {
           montos = '200.00';
         }
         else if(test == 8)
         {
           montos = '300.00';
         }
         else if(test == 9)
         {
           montos = '500.00';
         }else{
            montos = '0.00';
         }
        $("#textMonto").val(montos);     
      });

    var phone1, phone2;

    phone1 = document.getElementById('phone1');
    phone2 = document.getElementById('phone2');

    phone1.onchange = phone2.onkeyup = passwordMatch;

    function passwordMatch() {
        if(phone1.value !== phone2.value)
            phone2.setCustomValidity('Los Numeros no Coinciden.');
        else
            phone2.setCustomValidity('');
    }

    var input=  document.getElementById('phone1');
    input.addEventListener('input',function(){
      if (this.value.length > 10) 
         this.value = this.value.slice(0,10); 
    })

    var input2=  document.getElementById('phone2');
    input2.addEventListener('input',function(){
      if (this.value.length > 10) 
         this.value = this.value.slice(0,10); 
    })


});
  
</script>
@endsection
