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

            <div class="navegacion-card text-center mb-15 border-bottom-none">
              <h2 class="navegacion-card--titulo">Pedido #09776745</h2>
            </div>

            <div class="row no-row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 opacity-7 font-size-15 border-top border-bottom text-center">
              <div class="col py-3">
                <button type="button" class="btn-circle-full-standard"><i class="fa fa-check px-2" aria-hidden="true"></i> Notificar Transferencia</button>
              </div>
              <div class="col py-3">
                <button type="button" class="btn-circle-full-standard"><i class="fa fa-times px-2" aria-hidden="true"></i> Cancelar Orden</button>
              </div>
            </div>

            <div class="py-4 pedido-detalle-estado">
              <p class="texto-fecha-pedido py-1"><b>Fecha Realizada: </b><span class="px-2">5 de noviembre de 2019</span></p>
              <p class="texto-fecha-pedido py-1"><b>Estado: </b><span class="px-2">Pendiente (Espera de la Transferencia Bancaria)</span></p>
            </div>

            <div class="table-container">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">Producto</th>
                      <th scope="col" class="text-center">Precio U.</th>
                      <th scope="col" class="text-center">Cantidad</th>
                      <th scope="col" class="text-right">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody class="pedido-detalle-compra">
                    <tr>
                      <th scope="row">
                        <div class="py-2 pedido-detalle-compra--producto">
                          <img src="{{ url('images/comida1.jpg') }}" />
                          <p class="text-center">Centro Flores Multicolor </p>
                        </div>
                      </th>
                      <td>S/ 20.00</td>
                      <td>2</td>
                      <td class="text-right"><span class=""><b>S/ 40.00</b></span></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="py-2 pedido-detalle-compra--producto">
                          <img src="{{ url('images/comida1.jpg') }}" />
                          <p class="text-center">Centro Flores Multicolor </p>
                        </div>
                      </th>
                      <td>S/ 20.00</td>
                      <td>2</td>
                      <td class="text-right"><span class=""><b>S/ 40.00</b></span></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="py-2 pedido-detalle-compra--producto">
                          <img src="{{ url('images/comida1.jpg') }}" />
                          <p class="text-center">Centro Flores Multicolor </p>
                        </div>
                      </th>
                      <td>S/ 20.00</td>
                      <td>2</td>
                      <td class="text-right"><span class=""><b>S/ 40.00</b></span></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="py-2 pedido-detalle-compra--producto">
                          <img src="{{ url('images/comida1.jpg') }}" />
                          <p class="text-center">Centro Flores Multicolor </p>
                        </div>
                      </th>
                      <td>S/ 20.00</td>
                      <td>2</td>
                      <td class="text-right"><span class=""><b>S/ 40.00</b></span></td>
                    </tr>
                  </tbody>
                  <tfoot class="pedido-detalle-compra--monto">
                    <tr>
                      <th colspan="3" scope="col" class="text-right"><b>Cupón:</b></th>
                      <th scope="col" class="text-right"><span>S/ 0.00</span></th>
                    </tr>
                    <tr>
                      <th colspan="3" scope="col" class="text-right"><b>Total:</b></th>
                      <th scope="col" class="text-right"><span>S/ 160.00</span></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div class="seguimiento-pedido-card py-3">
              <p class="py-2 seguimiento-pedido-card--titulo text-center">SIGUE TU PEDIDO</p>
              <div class="row no-row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center seguimiento-pedido-card--items">
                <div class="col text-center py-3 seguimiento-pedido-card-detalle">
                  <p class="seguimiento-estado-titulo">Pendiente</p>
                  <div class="seguimiento-imagen py-3">
                    <span><i class="fa fa-cc-paypal" aria-hidden="true"></i></span>
                    <p class="seguimiento-fecha py-1">05 de nov.</p>
                  </div>
                  <p class="seguimiento-estado-detalle">Tu pedido esta reservado y pendiente de pago.</p>
                </div>
                <div class="col text-center py-3 seguimiento-pedido-card-detalle">
                  <p class="seguimiento-estado-titulo">Recibido</p>
                  <div class="seguimiento-imagen py-3">
                    <span><i class="fa fa-cc-paypal" aria-hidden="true"></i></span>
                    <p class="seguimiento-fecha py-1">05 de nov.</p>
                  </div>
                  <p class="seguimiento-estado-detalle">Tu pedido ha sido recibido.</p>
                </div>
                <div class="col text-center py-3 seguimiento-pedido-card-detalle">
                  <p class="seguimiento-estado-titulo active">En Preparación</p>
                  <div class="seguimiento-imagen py-3">
                    <span><i class="fa fa-cc-paypal active" aria-hidden="true"></i></span>
                    <p class="seguimiento-fecha py-1 active">27 de nov.</p>
                  </div>
                  <p class="seguimiento-estado-detalle active">Tus productos están siendo preparados para el envio.</p>
                </div>
                <div class="col text-center py-3 seguimiento-pedido-card-detalle">
                  <p class="seguimiento-estado-titulo">En tránsito</p>
                  <div class="seguimiento-imagen py-3">
                    <span><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                    <p class="seguimiento-fecha py-1">02 de dic.</p>
                  </div>
                  <p class="seguimiento-estado-detalle">Falta poco para que lo tengas en tus manos.</p>
                </div>
                <div class="col text-center py-3 seguimiento-pedido-card-detalle">
                  <p class="seguimiento-estado-titulo">Entregado</p>
                  <div class="seguimiento-imagen py-3">
                    <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                    <p class="seguimiento-fecha py-1">03 de dic.</p>
                  </div>
                  <p class="seguimiento-estado-detalle">Ya puedes disfrutar de tu compra.</p>
                </div>
              </div>
            </div>

            <div class="py-4 pedido-detalle-estado border-top">
              <p class="texto-fecha-pedido py-1"><b>Dirección de entrega: </b><span class="px-2">Jirón Domingo Martinez Luján 1130, Surquillo 15048 - Surquillo, Lima</span></p>
              <p class="texto-fecha-pedido py-1"><b>Forma de Pago: </b><span class="px-2"> Depósitos y Transferencias</span></p>
            </div>

          </div>
        </div>
      </section>

    </div>


@endsection

@section('scripts-footer')

    <script src="{{asset('js/sistema/administrador/index.js')}}"></script>

@endsection
