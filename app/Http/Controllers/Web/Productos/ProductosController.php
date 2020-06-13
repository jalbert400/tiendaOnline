<?php

namespace App\Http\Controllers\Web\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
  public function categorias()
  {
    return view("web.productos.categorias");
  }
  public function subCategorias()
  {
    return view("web.productos.sub-categorias");
  }
  public function subCategoriaDetalle()
  {
    return view("web.productos.sub-categoria-detalle");
  }
  public function productoDetalle()
  {
    return view("web.productos.producto-detalle");
  }
  public function carrito()
  {
    return view("web.productos.carrito");
  }
}
