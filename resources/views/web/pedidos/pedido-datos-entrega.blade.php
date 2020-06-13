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
              <a class="cursor-default">
                <span class="angle"></span>
                <span class="steps-d">2. Datos de Pago</span>
                <span class="steps-m">2</span>
              </a>
              <a class="active cursor-default">
                <span class="angle"></span>
                1. Datos de entrega</span>
              </a>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
          <div class="col form-group">
            <h3 class="pedido-titulo">Datos de Destinatario:</h3>
            <p class="pedido-descripcion mb-30">Ingrese los datos de la persona que recibirá el producto.</p>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Nombres</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un nombre .::.">
              </div>
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Apellidos</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un apellido .::.">
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Teléfono</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un teléfono .::.">
              </div>
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Otro Teléfono (opcional</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un teléfono .::.">
              </div>
            </div>
          </div>
          <div class="col form-group">
            <h3 class="pedido-titulo">Dirección del Destinatario:</h3>
            <p class="pedido-descripcion mb-30">Ingrese la dirección donde llegará el producto.</p>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Distrito</label>
                <select class="custom-select form-select">
                  <option selected>Seleccione</option>
                  <option value="1">Lima</option>
                  <option value="2">Miraflores</option>
                  <option value="3">San Isidro</option>
                </select>
              </div>
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Dirección</label>
                <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un dirección .::.">
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-1">
              <div class="col form-group">
                <label class="opacity-7 form-input-title">Referencia</label>
                <textarea class="form-control form-input-placeholder" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center">
          <a href="{{ url('/carrito') }}">
            <span class="px-2"><i class="fa fa-angle-double-left px-1" aria-hidden="true"></i> REGRESAR</span>
          </a>
          <a href="{{ url('/pedido-pago') }}">
            <button class="btn-circle-full-standard" type="submit">CONTINUAR <span class="px-2"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span> </button>
          </a>
        </div>

      </section>

    </div>

@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
