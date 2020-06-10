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
          <a href="{{ url('/categorias') }}">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            <span class="px-1">Perros</span>
          </a>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          <span class="breadcrumb-active px-1">Alimentación</span>
        </div>

        <div class="content-page">
          <div class="row no-row">
            <div class="col-md-4 menu-cuenta-card--container">
              @include('layouts.partialsWeb.menu-sub-categorias')
            </div>
            <div class="col col-md-8">
              <div class="productos__detacados">
                <form method="get" class="text-right">
                  <select name="orderby" class="orderby select-menu-producto" aria-label="Pedido de la tienda">
                    <option value="menu_order" selected="selected">Orden por defecto</option>
                    <option value="popularity">Ordenar por popularidad</option>
                    <option value="rating">Ordenar por calificación media</option>
                    <option value="date">Ordenar por las últimas</option>
                    <option value="price">Ordenar por precio: bajo a alto</option>
                    <option value="price-desc">Ordenar por precio: alto a bajo</option>
                  </select>
                  <input type="hidden" name="paged" value="1">
                </form>
                <div class="row no-row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 justify-content-center">

                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item-card padding-15">
                    <div class="productos-detacados-card--item">
                      <a href="{{ url('/productos-detalle') }}">
                        <img class="img-responsive mb-20" src="{{ url('images/productos/producto_1.jpg') }}">
                        <div class="productos-detacados__info position-relative py-3">
                          <h4 class="productos-detacados__info--categoria">
                            Alimentación
                          </h4>
                          <h6 class="productos-detacados__info--producto py-1">
                            Breedna Pienso para Perros Adult
                          </h6>
                        </div>
                        <div class="productos-detacados__info--price ">
                          <span class="productos-detacados__info--price-old text-decoration"> <b> S/ 200.00 </b> </span>
                          <p class="py-1">
                            <span class="productos-detacados__info--price-actual">S/ 190.00</span> <span class="productos-detacados__fraccion px-3">10% OFF</span>
                          </p>
                        </div>
                      </a>
                    </div>
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
