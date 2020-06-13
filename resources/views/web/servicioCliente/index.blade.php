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
          <span class="breadcrumb-active px-1">Quienes Somos</span>
        </div>

        <div class="content-page">
          <div class="row no-row">
            <div class="col-md-4 col-lg-3 menu-cuenta-card--container">
              @include('layouts.partialsWeb.menu-servicio-cliente')
            </div>

            <div class="col col-md-8 col-lg-9">
              <div class="navegacion-card border-botton-none">
                <h2 class="navegacion-card--titulo text-center"><span class="position-relative">Quienes Somos</span></h2>
              </div>
              <div class="servicio-cliente-card">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, nemo, repellendus sit ipsam nobis ea saepe ad blanditiis iusto cupiditate veritatis distinctio, doloremque esse sapiente vel ducimus excepturi? Modi, inventore.</p>
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
