<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class RecargasController extends Controller
{
   
   public function __construct()
	{
	    $this->middleware('auth');
	}
   public function index(){
   	$role_name = (Auth::check()) ? Auth::user()->get() : false;
   	return view('recargas.addRecarga');

   }

   public function recargaAdd(Request $request){
   	 try{

   	 	$rules = [
          'compania' => 'required|max:1',
          'mento' => 'required|max:1',
          'phone' => 'required|numeric|size:10'
        ];

        $rulesMessage = [
          'compania.required' => '* Compañia es obligatorio.',
          'mento.required' => '* El Monto es obligatorio.',
          'phone.required' => '* El campo teléfono es obligatorio, debe contener 10 numeros.',
          'phone.size' => '* El campo teléfono debe contener 10 numeros.',
          'phone.numeric' => '* El campo teléfono debe contener numeros.',
          
        ];

        $validator = Validator::make($request->all(),  $rules , $rulesMessage);

        if ($validator->fails()) {
          return redirect()->back()->withInput()->with([
             'field_errors' => $validator->errors()
           ]);
        }

	   	$userId = Auth::id();
	   	dd($request);
	  }
	  catch(\Exception $e){
        Auth::logout();
        $e;
        //return view('Verror', ['message' => $e->getMessage().', ALProveedoresCompletarAuth.']);
      } 	

   }
}
