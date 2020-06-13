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
            <span class="px-1">tienda</span>
          </a>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          <span class="breadcrumb-active px-1">Perros</span>
        </div>

        <div class="content-page">
          <div class="row no-row">
            <div class="col-md-4 menu-cuenta-card--container">
              @include('layouts.partialsWeb.menu-categorias')
            </div>
            <div class="col col-md-8">
              <div class="row no-row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 justify-content-center">

                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Alimentación</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Snacks y Huesos</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Juguetes</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Paseo</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">En Casa</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Transporte y Viaje</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Entrenamiento</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Antiparasitarios</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"></div>
                      <h3 class="py-3 text-center">Peluquería e Higiene</h3>
                    </a>
                  </div>
                </div>
                <div class="categoria-card-container col padding-15">
                  <div class="categoria-card--item">
                    <a href="{{ url('/sub-categorias') }}">
                      <div class="categoria-imagen-background" style="background-image: url('{{ url('images/categorias/alimentacion.jpg') }}');"> </div>
                      <h3 class="py-3 text-center">Vitaminas y Suplementos</h3>
                    </a>
                  </div>
                </div>

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
