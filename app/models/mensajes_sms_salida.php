<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class mensajes_sms_salida extends Model
{
    /**
  * El nombre de la tabla donde se almacena los datos
  * @var String
  * @access protected
  */
  protected $table = 'mensajes_sms_salida';

  /**
  * El nombre de la llave primaria
  * @var String
  * @access protected
  */
  protected $primaryKey = 'llave';

  /**
   * Los atributos que pueden ingresarlos de forma masiva
   *
   * @var array
   */
  protected $fillable = [
      'fecha_sistema',
      'cve_usuario',
      'mensaje',
      'status	',
      'numero_destino',
      'fecha_envio',
      'token'
  ];


  protected $rules = [
    'fecha_sistema'       => 'required|date',
    'cve_usuario'         => 'required|between:3,30',
    'mensaje'             => 'required|between:3,450',
    'status'              => 'required|between:1,3',
    'numero_destino'      => 'required|between:3,36',
    'fecha_envio'         => 'required|date',
    'token'               => 'required|between:1,4',

  ];
}
