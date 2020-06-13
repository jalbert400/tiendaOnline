<?php

namespace App\Http\Controllers\Modulos\Rol;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Administrador\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RolController extends Controller
{
  public function index()
  {

    //dd('estoy en rol');
    return view('administrador.modulos.rol.index');
  }

  public function lista(Request $request)
  {
    //if($request->ajax()){
    //$usuarioAuth = Auth::user();

    #Filtrando lista de Roles segun los subroles del admin o subadmin
    $roles = Role::getSubRolesByRolUser();
    //$roles = Role::get();
    //$dataListReturn = datatables()
    //  ->collection($roles);
    $dataListReturn = datatables()
      ->collection($roles);


    $dataListReturn = $dataListReturn
      ->only(['id', 'nombre', 'estado', 'btn'])
      ->addColumn('btn', 'modulo.administrador.index')
      ->rawColumns(['btn'])
      ->toJson();


    return $dataListReturn;

    #End Filtro

    //}
    //return abort(404);
  }
}
