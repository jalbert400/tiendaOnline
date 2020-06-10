<?php

namespace App\Http\Controllers\Web\ServicioCliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicioClienteController extends Controller
{
  public function index()
  {
    return view("web.servicioCliente.index");
  }
}
