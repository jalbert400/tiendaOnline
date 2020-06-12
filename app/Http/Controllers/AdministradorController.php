<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador\User;
use App\Administrador\Role;

class AdministradorController extends Controller
{
  public function index()
  {
    return view('administrador.index');
  }

  public function list(Request $request)
  {

    $resultado_modulos = User::getModulosByUserAuth();

    //return $this->showContJsonAll($resultado_modulos, true);

    return response()->json(["error" => false, "response" => ["data" => $resultado_modulos]]);
  }
}
