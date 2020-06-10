<?php

namespace App\Http\Controllers\Web\CuentaCliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
  public function index()
  {
    return view('web.cuenta.index');
  }

  public function cuentaDatosPersonales()
  {
    return view("web.cuenta.datosPersonales");
  }
  public function cuentaActualizarPassword()
  {
    return view("web.cuenta.actualizarPassword");
  }
  public function cuentaHistorialPedidos()
  {
    return view("web.cuenta.historialPedidos");
  }
  public function cuentaDetalleHistorialPedido()
  {
    return view("web.cuenta.detalleHistorialPedido");
  }
  public function cuentaCuponesDescuento()
  {
    return view("web.cuenta.cuponesDescuento");
  }
}
