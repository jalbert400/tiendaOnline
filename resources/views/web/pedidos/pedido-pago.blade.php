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

      <section class="container_pedido py-5">

        <div class="row mb-40 no-row">
          <div class="col-xl-10">
            <div class="checkout-steps">
              <a class="cursor-default">
                <span class="steps-d">3. Confirmar Pedido</span>
                <span class="steps-m">3</span>
              </a>
              <a class="active cursor-default">
                <span class="angle"></span>
                2. Datos de Pago</span>
              </a>
              <a class="cursor-default">
                <span class="angle"></span>
                <span class="steps-d">1. Datos de entrega</span>
                <span class="steps-m">1</span>
              </a>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
          <div class="col form-group">
            <h3 class="pedido-titulo">Forma de Pago:</h3>
            <p class="pedido-descripcion mb-30">Elige la Forma de Pago:</p>

            <div class="cc-selector">
              <ul class="padding-30">
                <li>
                  <span class="py-1">
                    <input id="visa" type="radio" name="credit-card" value="visa" />
                    <label class="drinkcard-cc visa" for="visa"></label>
                  </span>
                </li>
                <li>
                  <span class="py-1">
                    <input id="mastercard" type="radio" name="credit-card" value="mastercard" />
                    <label class="drinkcard-cc mastercard" for="mastercard"></label>
                  </span>
                </li>
              </ul>
            </div>

          </div>
          <div class="col form-group">
            <h3 class="pedido-titulo">Comprobante de Pago:</h3>
            <p class="pedido-descripcion mb-30">Elige el tipo de Comprobante de Pago.</p>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Comprobante:</label>
                <select class="custom-select form-select">
                  <option selected>Seleccione</option>
                  <option value="1">Ninguno</option>
                  <option value="2">Boleta</option>
                  <option value="3">Factura</option>
                </select>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Dni.</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un nombre .::.">
              </div>
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Nombre</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un apellido .::.">
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Razón Social.</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un nombre .::.">
              </div>
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Ruc:</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un apellido .::.">
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Dirección.</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un nombre .::.">
              </div>
            </div>
          </div>
        </div>

        <div class="text-center">
          <a href="{{ url('/pedido-datos-entrega') }}">
            <span class="px-2"><i class="fa fa-angle-double-left px-1" aria-hidden="true"></i> REGRESAR</span>
          </a>
          <a href="{{ url('/pedido-confirmacion') }}">
            <button class="btn-circle-full-standard" type="submit">CONTINUAR <span class="px-2"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span> </button>
          </a>
        </div>

      </section>

    </div>

@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
