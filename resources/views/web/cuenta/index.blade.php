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

    <section class="container">

      <div class="container background-seccion">

        <section class="py-4">

          <div class="navegacion-card">
            <h2 class="navegacion-card--titulo">Mi Cuenta</h2>
          </div>

          <div class="cuenta-seccion row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center py-4">
            <div class="col text-center">
              <a href="{{ url('/cuenta/mis-datos-personales') }}" class="cuenta-icon">
                <div class="py-2"><i class="fa fa-user cursor-pointer" aria-hidden="true"></i></div>
                <p class="py-1">Mis Datos Personales</p>
              </a>
            </div>
            <div class="col text-center">
              <a href="{{ url('/cuenta/actualizar-password') }}" class="cuenta-icon">
                <div class="py-2"><i class="fa fa-lock cursor-pointer" aria-hidden="true"></i></div>
                <p class="py-1">Cambiar mi Password</p>
              </a>
            </div>
            <div class="col text-center">
              <a href="{{ url('/cuenta/detalle-historial-pedido') }}" class="cuenta-icon">
                <div class="py-2"><i class="fa fa-file-text-o cursor-pointer" aria-hidden="true"></i></div>
                <p class="py-1">Historial de Compras</p>
              </a>
            </div>
            <div class="col text-center">
              <a href="{{ url('/cuenta/cupones-descuento') }}" class="cuenta-icon">
                <div class="py-2"><i class="fa fa-ticket cursor-pointer" aria-hidden="true"></i></div>
                <p class="py-1">Cupones de Descuento</p>
              </a>
            </div>
          </div>

        </section>

      </div>


    </section>

</div>
@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
