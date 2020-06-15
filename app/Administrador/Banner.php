<?php

namespace App\Administrador;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
  use SoftDeletes;

  protected $table = 'banners';

  protected $fillable = [
    'nombre',
    'imagen',
    'enlace',
    'orden'
  ];

  public function setNombreAttribute($nombre)
  {
    $this->attributes['nombre'] = strtoupper($nombre);
  }

  /*
  public static function getSubRolesByRolUser()
  {
    //if($usuario->tienePermisoEspecial()){
    return Role::all();
    //}
    //return Role::where('referencia','=',$usuario->role_id)->get();
  }
  */
}
