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
              <h2 class="navegacion-card--titulo">Historial de Pedidos</h2>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 py-1 opacity-7 font-size-15">
              <div class="col-md-4 text-left align-self-center total-pedidos">
                <span>Total 9 Pedidos</span>
              </div>
              <div class="col-md-8 text-md-right">
                <span>Ordenar por:</span>
                <select class="form-control select-items">
                  <option>Fecha</option>
                  <option>N° Pedido</option>
                </select>
              </div>
            </div>

            <div class="table-container">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">N° Pedido</th>
                      <th scope="col">Fecha realizada</th>
                      <th scope="col">Total</th>
                      <th scope="col">Estado</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">#09776548</th>
                      <td>5 de Noviembre del 2020</td>
                      <td>S/ 450.00</td>
                      <td><span class="color-pendiente"><b>Pendiente</b></span></td>
                      <td><a href="{{ url('/cuenta-detalle-historial-pedido') }}" class="link-ver-mas">VER <span><i class="fa fa-plus" aria-hidden="true"></i></span></a></td>
                    </tr>
                    <tr>
                      <th scope="row">#09776548</th>
                      <td>5 de Noviembre del 2020</td>
                      <td>S/ 450.00</td>
                      <td><span class="color-pagado"><b>Pagado</b></span></td>
                      <td><a href="{{ url('/cuenta-detalle-historial-pedido') }}" class="link-ver-mas">VER <span><i class="fa fa-plus" aria-hidden="true"></i></span></a></td>
                    </tr>
                    <tr>
                      <th scope="row">#09776548</th>
                      <td>5 de Noviembre del 2020</td>
                      <td>S/ 450.00</td>
                      <td><span class="color-confirmado"><b>Confirmado</b></span></td>
                      <td><a href="{{ url('/cuenta-detalle-historial-pedido') }}e" class="link-ver-mas">VER <span><i class="fa fa-plus" aria-hidden="true"></i></span></a></td>
                    </tr>
                    <tr>
                      <th scope="row">#09776548</th>
                      <td>5 de Noviembre del 2020</td>
                      <td>S/ 450.00</td>
                      <td><span class="color-entregado"><b>Entregado</b></span></td>
                      <td><a href="{{ url('/cuenta-detalle-historial-pedido') }}" class="link-ver-mas">VER <span><i class="fa fa-plus" aria-hidden="true"></i></span></a></td>
                    </tr>
                  </tbody>
                </table>
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
