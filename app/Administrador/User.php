<?php

namespace App\Administrador;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
  use SoftDeletes;

  protected $table = 'users';

  protected $fillable = [
    'role_id',
    'nombre',
    'apellidos',
    'dni',
    'telefono',
    'email',
    'username',
    'estado'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  public static function getModulosByUserAuth()
  {

    //if($user->tienePermisoEspecial()){//Si tiene permisos especiales de administrador

    $modulos = Permiso::where('tipo', Permiso::TIPO_MODULO)
      //->where('slug','like','%'.$search.'%')
      //->orderBy('orden','asc')
      ->get();
    return $modulos;
  }
}
