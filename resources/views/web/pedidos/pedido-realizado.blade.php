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

      <section class="py-5">

        <div>
          <h3 class="pedido-titulo text-center">PEDIDO N° 09776745 REALIZADO CON EXITO !!!</h3>
          <p class="pedido-descripcion text-center py-2">Gracias por su compra.</p>
          <p class="pedido-descripcion text-center mb-30">Pague su compra haciendo una transferencia bancaria o depositando el monto total al siguiente número de cuenta.</p>
        </div>

        <div class="pedido-realizado-descripcion row no-row row-cols-1 row-cols-sm-2 row-cols-md-2 py-4">
          <div class="col text-center align-self-center">
            <img src="{{ url('images/pagos/pago_bcp.png') }}" />
          </div>
          <div class="col">
            <div class="pedido-descripcion">
              <p>BANCO DE CREDITO DEL PERU O AGENTE DEL BCP</p>
              <P>Cta. Cte. en soles: xxx xxxxxx xxx</P>
              <P>Titular: Global</P>
              <P>Se debe enviar la constancia de depósito al correo de ventas global@gmail.com</P>
            </div>
          </div>
        </div>

      </section>

    </div>

@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
