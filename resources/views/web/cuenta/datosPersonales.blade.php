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
              <h2 class="navegacion-card--titulo">Mis Datos Personales</h2>
            </div>
            <div class="formulario-card padding-15">
              <form>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Nombres:</label>
                    <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un nombre .::.">
                  </div>
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Apellidos:</label>
                    <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un apellido .::.">
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Email:</label>
                    <input type="email" class="form-control form-input-placeholder" aria-describedby="emailHelp" placeholder="Ingresar un email .::.">
                  </div>
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Teléfono:</label>
                    <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar un teléfono .::.">
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Dirección:</label>
                    <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar una dirección .::.">
                  </div>
                  <div class="col form-group">
                    <label class="opacity-7 form-input-title">Ciudad:</label>
                    <input class="form-control form-input-placeholder" type="text" placeholder="Ingresar su ciudad .::.">
                  </div>
                </div>
                <div class="form_submit py-3 text-center">
                  <input type="submit" class="btn-circle-standard" value="ACTUALIZAR PERFIL">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="modalPerfilLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalPerfilLabel">Alerta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Datos personales actualizados correctamente.</p>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
