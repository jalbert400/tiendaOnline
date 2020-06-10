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

    <div class="container background-seccion">

      <section class="py-4">
        <div class="breadcrumb-card py-1">
          <a href="{{ url('/') }}">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="px-1">Tienda</span>
          </a>
          <a href="{{ url('/categorias') }}">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            <span class="px-1">Perros</span>
          </a>
          <a href="{{ url('/sub-categorias') }}">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            <span class="px-1">Alimentación</span>
          </a>
          <a href="{{ url('/sub-categoria-detalle') }}">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            <span class="px-1">Pieso</span>
          </a>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          <span class="breadcrumb-active px-1">Purina Friskies Perro Adulto Aves y Verduras 15kg</span>
        </div>

        <div class="content-page">
          <div class="row no-row">
            <div class="col-lg-4 menu-carrito-card--container">
              @include('layouts.partialsWeb.menu-producto-slider')
            </div>
            <div class="col col-lg-8">
              <div class="producto-detalle">
                <h1 class="producto-detalle--titulo">
                  Breedna Pienso para Perros Adult Salmón & Arroz 20kg
                </h1>
                <p class="producto-detalle--descripcion">Idóneo alimento que aporta gran digestibilidad a perros, de Breedna.</p>
              </div>
              <div class="producto-detalle-peso mb-20">
                <div class="producto-detalle-peso--formato"><b>Formato:</b><span class="px-2">10kg</span></div>
                <ul class="listado-producto-peso">
                  <li>
                    <p class="producto-peso--formato">4 KG</p>
                    <p class="producto-peso--precio">S/ 20.00</p>
                  </li>
                  <li>
                    <p class="producto-peso--formato">6 KG</p>
                    <p class="producto-peso--precio">S/ 30.00</p>
                  </li>
                  <li>
                    <p class="producto-peso--formato">8 KG</p>
                    <p class="producto-peso--precio">S/ 40.00</p>
                  </li>
                </ul>
              </div>
              <div class="producto-detalle-precio py-3 border-bottom border-top">

                <div class="row no-row row-cols-1 row-cols-sm-3 row-cols-md-3 justify-content-center">
                  <div class="col text-center producto-precio-actual-before">
                    <p><span class="producto-precio-actual">S/ 30.00</span><span class="producto-precio-before position-relative px-2">S/ 30.00</span></p>
                  </div>
                  <div class="col text-center">
                    <div class="carrito-card-items--cantidad">
                      <button class="less-quantity" type="button">
                        <span>-</span>
                      </button>
                      <span><input type="text" name="cantidad" id="cantidad" class="form-control input-carrito-cantidad"></span>
                      <button class="more-quantity" type="button">
                        <span>+</span>
                      </button>
                    </div>
                  </div>
                  <div class="col text-center">
                    <a href="{{ url('/carrito') }}">
                      <input type="submit" value="Agregar Carrito" class="btn-submit-modal form-control-sm">
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="producto-descripcion py-4">
            <h2 class="producto-descripcion--titulo position-relative mb-30">Información Detallada</h2>
            <p class="producto-descripcion--detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet in ea blanditiis natus, fugit vel similique ullam quaerat obcaecati accusantium totam omnis itaque qui rerum voluptatibus sequi recusandae labore corporis!</p>
          </div>

          <div class="py-3">
            @include('layouts.partialsWeb.menu-producto-relacionados')
          </div>

        </div>
      </section>

    </div>

@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
