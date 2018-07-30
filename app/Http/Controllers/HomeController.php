<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\models\mensajes_sms_salida;
use App\lib\nusoap\nusoap;
use Carbon\Carbon ;

class HomeController extends Controller
{
    private $service;

    public function index(Request $request)
    {

        $user = Auth::id();

        if (is_null($user)) {
          return redirect('/login');
        }

        $role = DB::table('role_user')
        ->where('user_id','=',$user)
        ->first();

        $roles = $role->role_id;

        if ($roles != 2){
            Auth::logout();
            return redirect('/permiso-denegado');
        }

        $request->user()->authorizeRoles(['user']);
        return view('home');
    }  

      public function resetear(){
        return view('auth.reset');
      }
      public function login2(){
        return view('auth.login2');
      }

       public function peticionReload(){
        return view('auth.peticionReload');
      }

      public function peticionView($llave, $pass){
        try {

          $token = DB::table('mensajes_sms_salida')
          ->where([
                    ['llave', '=', $llave],
                    ['status', '=', 1],
                ])
          ->first();

          $token_d = encrypt($token->llave);


          $date_created = new \Carbon\Carbon($token->created_at);
          $date_created = $date_created->format('Y-m-d');


           if($date_created == date("Y-m-d"))
           {
              return view('auth.peticion',compact('token_d', 'pass'));
           }else{
             return view('auth.peticionReload');
           }
            
         }
          catch(\Exception $e) {
              return $e->getMessage();
          }   
      }
      public function token_send(Request $request){
        try {

          $token = DB::table('mensajes_sms_salida')
          ->where([
                    ['llave', '=', $llave],
                    ['status', '=', 1],
                ])
          ->first();

          $date_created = new \Carbon\Carbon($token->created_at);
          $date_created = $date_created->format('Y-m-d');


           if($date_created == date("Y-m-d"))
           {
              return view('auth.peticion');
           }else{
             return view('auth.peticionReload');
           }
            
         }
          catch(\Exception $e) {
              return $e->getMessage();
          }   
      }

      public function peticion(Request $request){
          try {
                $cve_usuario = $request->input('telefono');
                $password    = $request->input('password');
                $password  = md5($password);

                $users = DB::table('usuarios')->where([
                    ['cve_usuario', '=', $cve_usuario],
                    ['password', '=', $password],
                ])->first();

                $pass = encrypt($password);

                $users_c = count($users);

                if ($users_c == 0){
                  return redirect()->back()->with('message', 'Número o contraseña incorrectos, verifica e ingresa de nuevo tus datos. ');
                } else {

                  mt_srand(time());
                  $digitos = '';
                  for($i = 0; $i < 4; $i++){
                     $digitos .= mt_rand(0,9);
                  }
                  
                  $mensaje ='Tu Token es: '.$digitos.'. Vigente para el dia de hoy.';

                  $sms = new mensajes_sms_salida();
                  $sms->fecha_sistema = date("Y-m-d H:i:s");
                  $sms->cve_usuario = $users->cve_usuario;
                  $sms->mensaje =  $mensaje;
                  $sms->status = 1;
                  $sms->numero_destino = $users->cve_usuario;
                  $sms->token = $digitos;
                  $sms->save();
                 

                  return redirect('/sendmsg/'.$digitos.'/'.$users->cve_usuario.'/'.$sms->llave.'/'.$pass);
                }


              
          }
          catch(\Exception $e) {
              return $e->getMessage();
          }

          
        }

        public function resetearBuscar(Request $request){
          $user = $request->input('email');
          $proveedor = DB::table('users')
          ->where('users.email',$user)
          ->first();

          if (is_null($proveedor)){
            return redirect()->back()->with('message', 'Dirección de correo no encontrada. ');
          } else {

            $email = $proveedor->email;
            $name = $proveedor->name;
            $id = $proveedor->id;
            $this->welcomeEmailRec($email,$name,$id);
            return redirect('/envio-recuperar-contrasena');
          }
        }
        public function accesoA(Request $request){
          try {
                $token      = $request->input('token');
                $token_d    = $request->input('token_d');
                $token_d    = decrypt($token_d);

                $users = DB::table('mensajes_sms_salida')->where([
                    ['llave', '=', $token_d],
                    ['token', '=', $token],
                ])->first();
                
                $users_c = count($users);

                if ($users_c == 0){
                  return redirect()->back()->with('message', 'Token incorrecto, verifica e ingresa de nuevo el token. ');
                } else {
                  echo 'entro al home';
                }


              
          }
          catch(\Exception $e) {
              return $e->getMessage();
          }
        }

        public function envio(){
          return view('auth.revisa');
        }

        public function Vpermisodenegado(){
            return view('Vpermisodenegado');
        }


/*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */
}
