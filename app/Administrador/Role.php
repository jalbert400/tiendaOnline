<?php

namespace App\Administrador;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
  use SoftDeletes;

  protected $table = 'roles';

  protected $fillable = [
    'nombre',
    'estado'
  ];

  public function setNombreAttribute($nombre)
  {
    $this->attributes['nombre'] = strtoupper($nombre);
  }
}
