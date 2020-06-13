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
        <div class="row no-row">
          <div class="col-md-4 menu-cuenta-card--container">
            @include('layouts.partialsWeb.menu-cuenta')
          </div>

          <div class="col col-md-8">
            <div class="navegacion-card">
              <h2 class="navegacion-card--titulo">Cambiar Password</h2>
            </div>
            <div class="formulario-card padding-15">
              <form>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                  <div class="col-lg-6 form-group">
                    <label class="opacity-7 form-input-title">Password Actual:</label>
                    <input class="form-control form-input-placeholder" type="text" placeholder="MiPassword123">
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Nuevo Password:</label>
                    <input type="password" class="form-control form-input-placeholder" placeholder="Ingresar nuevo password .::.">
                  </div>
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Repetir Password:</label>
                    <input class="form-control form-input-placeholder" type="password" placeholder="Repetir nuevo password .::.">
                  </div>
                </div>
                <div class="form_submit py-3 text-center">
                  <input type="submit" class="btn-circle-standard" value="ACTUALIZAR PASSWORD">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    </div>


@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
