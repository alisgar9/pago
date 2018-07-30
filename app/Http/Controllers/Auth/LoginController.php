<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\models\mensajes_sms_salida;
use Carbon\Carbon ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;




class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function cve_usuario()
    {
        return 'cve_usuario';
    }

     public function login(Request $request)
    {
                $token      = $request->input('token');
                $token_d    = $request->input('token_d');
                $token_d    = decrypt($token_d);

                $users = DB::table('mensajes_sms_salida')->where([
                    ['llave', '=', $token_d],
                    ['token', '=', $token],
                ])->first();
                
                $users_c = count($users);
                
                if ($users_c == 0){
                  return redirect()->back()->with('message', 'Token incorrecto, verifica e ingresa de nuevo el token.');
                } else {
   
                        
                        // Get user record
                        $user = User::where('cve_usuario', $users->cve_usuario)->first();


                        // Check Condition Mobile No. Found or Not
                        if($users->cve_usuario != $user->cve_usuario) {
                            return redirect()->route('/login');
                        }        
                        
                        // Set Auth Details
                        \Auth::login($user);
                        
                        // Redirect home page
                        return redirect()->route('home');
                }
    }




}
