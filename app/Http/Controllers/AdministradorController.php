<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador\User;
use App\Administrador\Role;
use App\Http\Controllers\GeneralController;

class AdministradorController extends GeneralController
{
  public function index()
  {
    return view('administrador.index');
  }

  public function list()
  {

    $resultado_modulos = User::getModulosByUserAuth();

    //return $this->showContJsonAll($resultado_modulos, true);

    return response()->json(["error" => false, "response" => ["data" => $resultado_modulos]]);
  }
}
