@extends('layouts.webTemplate')

@section('title_page', 'Dashboard')

@section('estilos')

@endsection

@section('scripts-header')

@endsection

@section('top-left-submenus')
    @parent

    <li class="nav-item d-none d-sm-inline-block">
        <a href="javascript:void(0)" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="javascript:void(0)" class="nav-link">Contact</a>
    </li>
@endsection

@section('title-container')

@endsection

@section('ruta-navegacion-container')
    @parent

@endsection

@section('aside-right')
    {{-- Aqui el aside del lado derecho, ingresar lo que sedea mostrar--}}

@endsection

@section('content')
    @parent

    <div class="container">

      <section class="py-4">

        <div class="breadcrumb-card py-1">
          <a href="{{ url('/') }}">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="px-1">Inicio</span>
          </a>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          <span class="breadcrumb-active px-1">Resumen de tu Pedido</span>
        </div>

        <div class="content-page">
          <h2 class="page-card--titulo border-bottom-1 border-top-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="px-2">Resumen de tu Pedido</span></h2>
          <div class="page-card-container">
            <div class="row no-row">
              <div class="col col-lg-8">
                <div class="carrito-card-items">
                  <p class="text-center py-1 carrito-card-item--titulo position-relative">Producto 01 <span><i class="fa fa-times" aria-hidden="true"></i></span></p>
                  <div class="row carrito-card-items--producto py-2 row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="col">
                      <div class="carrito-card-items--producto-detalle">
                        <img class="img-responsive carrito-card-items--imagen" src="{{ url('images/productos/producto_carrito_1.jpg') }}">
                        <div class="carrito-card-items-producto--pedido">
                          <span><b>Precio Unitario:</b> S/ 45.00</span>
                          <span><b>Peso:</b> 7kg</span>
                        </div>
                      </div>
                    </div>
                    <div class="col carrito-card-items--cantidad-subtotal">
                      <div class="carrito-card-items--cantidad">
                        <button class="less-quantity" type="button">
                          <span>-</span>
                        </button>
                        <span><input type="text" name="cantidad" id="cantidad" class="form-control input-carrito-cantidad"></span>
                        <button class="more-quantity" type="button">
                          <span>+</span>
                        </button>
                      </div>
                      <div class="carrito-card-items--subtotal">
                        S/ 50.00
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carrito-card-items">
                  <p class="text-center py-1 carrito-card-item--titulo position-relative">Producto 02 <span><i class="fa fa-times" aria-hidden="true"></i></span></p>
                  <div class="row carrito-card-items--producto py-2 row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="col">
                      <div class="carrito-card-items--producto-detalle">
                        <img class="img-responsive carrito-card-items--imagen" src="{{ url('images/productos/producto_carrito_1.jpg') }}">
                        <div class="carrito-card-items-producto--pedido">
                          <span><b>Precio Unitario:</b> S/ 45.00</span>
                          <span><b>Peso:</b> 7kg</span>
                        </div>
                      </div>
                    </div>
                    <div class="col carrito-card-items--cantidad-subtotal">
                      <div class="carrito-card-items--cantidad">
                        <button class="less-quantity" type="button">
                          <span>-</span>
                        </button>
                        <span><input type="text" name="cantidad" id="cantidad" class="form-control input-carrito-cantidad"></span>
                        <button class="more-quantity" type="button">
                          <span>+</span>
                        </button>

                      </div>
                      <div class="carrito-card-items--subtotal">
                        S/ 50.00
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carrito-card-items">
                  <p class="text-center py-1 carrito-card-item--titulo position-relative">Producto 03 <span><i class="fa fa-times" aria-hidden="true"></i></span></p>
                  <div class="row carrito-card-items--producto py-2 row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="col">
                      <div class="carrito-card-items--producto-detalle">
                        <img class="img-responsive carrito-card-items--imagen" src="{{ url('images/productos/producto_carrito_1.jpg') }}">
                        <div class="carrito-card-items-producto--pedido">
                          <span><b>Precio Unitario:</b> S/ 45.00</span>
                          <span><b>Peso:</b> 7kg</span>
                        </div>
                      </div>
                    </div>
                    <div class="col carrito-card-items--cantidad-subtotal">
                      <div class="carrito-card-items--cantidad">
                        <button class="less-quantity" type="button">
                          <span>-</span>
                        </button>
                        <span><input type="text" name="cantidad" id="cantidad" class="form-control input-carrito-cantidad"></span>
                        <button class="more-quantity" type="button">
                          <span>+</span>
                        </button>

                      </div>
                      <div class="carrito-card-items--subtotal">
                        S/ 50.00
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 menu-carrito-card--container">
                @include('layouts.partialsWeb.menu-carrito-detalle')
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>

@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
