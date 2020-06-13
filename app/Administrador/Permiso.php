<?php

namespace App\Administrador;

use Illuminate\Database\Eloquent\Model;
use App\Transformers\PermisoTransformer;
use App\Administrador\User;
use App\Administrador\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permiso extends Model
{

  use SoftDeletes;

  protected $table = 'permisos';

  const TIPO_MODULO = "Modulo";
  const TIPO_SUBMODULO = "Submodulo";

  public $transformer = PermisoTransformer::class;

  protected $fillable = [
    'nombre',
    'slug',
    'ruta',
    'imagen',
    'tipo',
    'referencia',
    'descripcion',
  ];
}
