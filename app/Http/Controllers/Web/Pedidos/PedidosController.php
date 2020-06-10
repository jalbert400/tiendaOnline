<?php

namespace App\Http\Controllers\Web\Pedidos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
  public function pedidoDatosEntrega()
  {
    return view("web.pedidos.pedido-datos-entrega");
  }
  public function pedidoPago()
  {
    return view("web.pedidos.pedido-pago");
  }
  public function pedidoConfirmacion()
  {
    return view("web.pedidos.pedido-confirmacion");
  }
  public function pedidoRealizado()
  {
    return view("web.pedidos.pedido-realizado");
  }
}
