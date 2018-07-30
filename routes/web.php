<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

// Route para el logout.
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/peticion', 'HomeController@peticion');
Route::get('/login2', 'HomeController@login2');
Route::post('/peticion-reload', 'HomeController@peticionReload');
Route::get('/peticion-view/{llave}/{pass}', 'HomeController@peticionView');
Route::get('/resetear-contrasena', 'HomeController@resetear');
Route::post('/reset-contrasena', 'HomeController@resetearBuscar');
Route::get('/envio-recuperar-contrasena', 'HomeController@envio');
Route::get('/home', [
      'as'    =>  'home',
      'uses'  =>  'HomeController@index'
   ]);
Route::get('/', function() {
      return redirect('/login');
});
Route::any('/sendmsg/{token}/{telefono}/{llave}/{pass}', function($token, $telefono, $llave, $pass) {
  
    include 'nusoap/nusoap.php';
    $wsdl = "http://r10.ventastelcel.com/ws/status/soap.php?wsdl";

    $client = new nusoap_client($wsdl, 'wsdl');
    $err = $client->getError();
    if ($err) {
       // Display the error
       echo '<h2>Constructor error</h2>' . $err;
       // At this point, you know the call that follows will fail
       exit();
    }

    $mensaje ='Tu Token es: '.$token .'. Vigente para el dia de hoy.';
    $parametros = array(
                'usuario'     => '5556938963',
                'password'    => '22222222',
                'dongle'      => 'popocaca',
                'message'     => $mensaje,
                'telefono'     => $telefono
            );
    
    $result1=$client->call('sendMsg', $parametros);
    if($result1 == null)
    {
      return redirect('/SMError');
    }else{
      return redirect('/peticion-view/'.$llave.'/'.$pass);
    }
   

});
Route::post('/acceso', 'Auth\LoginController@acceso');

Route::get('/permiso-denegado', 'HomeController@Vpermisodenegado');

Route::get('/recargas', 'RecargasController@index');
Route::post('/recargas-add', 'RecargasController@recargaAdd');

