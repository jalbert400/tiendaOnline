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

      <div class="home-pages row">
        <div class="slider-banners">
          <div class="banner-owl owl-carousel owl-theme">
            <div class="item">
              <a href="{{ url('/') }}">
                <img class="img-responsive" id="item_banner" src="{{ url('images/banners') }}/banner_1.jpg" style="width: 100%;">
              </a>
            </div>
            <div class="item">
              <a href="{{ url('/') }}">
                <img class="img-responsive" id="item_banner" src="{{ url('images/banners') }}/banner_2.jpg" style="width: 100%;">
              </a>
            </div>
            <div class="item">
              <a href="{{ url('/') }}">
                <img class="img-responsive" id="item_banner" src="{{ url('images/banners') }}/banner_3.png" style="width: 100%;">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="productos-detacados-card py-4 row-less-margin background-seccion-secondary">
        <h3 class="text-center py-4"><span class="titulo--color__primary">PRODUCTOS </span><span class="titulo--color_secundary">DESTACADOS</span></h3>
        <div class="items-card">
          <div class="position-relative row-more-margin">
            <div class="productos-detacados-owl owl-carousel owl-theme">
              <div class="item-card">
                <div class="productos-detacados-card--item">
                  <a href="{{ url('/producto-detalle') }}">
                    <img class="img-responsive mb-20" src="{{ url('images/productos') }}/producto_1.jpg">
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
              <div class="item-card">
                <div class="productos-detacados-card--item">
                  <a href="{{ url('/producto-detalle') }}">
                    <img class="img-responsive mb-20" src="{{ url('images/productos') }}/producto_1.jpg">
                    <div class="productos-detacados__info position-relative py-3">
                      <h4 class="productos-detacados__info--categoria">
                        Juguetes
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
              <div class="item-card">
                <div class="productos-detacados-card--item">
                  <a href="{{ url('/producto-detalle') }}">
                    <img class="img-responsive mb-20" src="{{ url('images/productos') }}/producto_1.jpg">
                    <div class="productos-detacados__info position-relative py-3">
                      <h4 class="productos-detacados__info--categoria">
                        Entretenimiento
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
              <div class="item-card">
                <div class="productos-detacados-card--item">
                  <a href="{{ url('/producto-detalle') }}">
                    <img class="img-responsive mb-20" src="{{ url('images/productos') }}/producto_1.jpg">
                    <div class="productos-detacados__info position-relative py-3">
                      <h4 class="productos-detacados__info--categoria">
                        Paseo
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

      <div class="subcategorias-card row-less-margin padding-bottom-30 background-seccion">
        <h3 class="text-center py-4"><span class="titulo--color__primary">MAS </span><span class="titulo--color_secundary">SOLICITADOS</span></h3>
        <div class="items-card">
          <div class="position-relative row-more-margin">
              <div class="sub-categorias-owl owl-carousel owl-theme">
                <div class="item-card">
                  <div class="subcategorias-card--item">
                    <a href="{{ url('/') }}/sub-categorias">
                      <img class="img-responsive" id="item_producto" src="{{ url('images/categorias') }}/solicitado_3.jpg">
                      <h3 class="text-center py-3">Alimentación</h3>
                    </a>
                  </div>
                </div>
                <div class="item-card">
                  <div class="subcategorias-card--item">
                    <a href="{{ url('/') }}sub-categorias">
                      <img class="img-responsive" id="item_producto" src="{{ url('images/categorias') }}/solicitado_2.jpg">
                      <h3 class="text-center py-3">Snacks y Huesos</h3>
                    </a>
                  </div>
                </div>
                <div class="item-card">
                  <div class="subcategorias-card--item">
                    <a href="{{ url('/') }}sub-categorias">
                      <img class="img-responsive" id="item_producto" src="{{ url('images/categorias') }}/solicitado_1.jpg">
                      <h3 class="text-center py-3">En Casa</h3>
                    </a>
                  </div>
                </div>
                <div class="item-card">
                  <div class="subcategorias-card--item">
                    <a href="{{ url('/') }}sub-categorias">
                      <img class="img-responsive" id="item_producto" src="{{ url('images/categorias') }}/solicitado_4.jpg">
                      <h3 class="text-center py-3">Entretenimiento</h3>
                    </a>
                  </div>
                </div>
                <div class="item-card">
                  <div class="subcategorias-card--item">
                    <a href="{{ url('/') }}sub-categorias">
                      <img class="img-responsive" id="item_producto" src="{{ url('images/categorias') }}/solicitado_2.jpg">
                      <h3 class="text-center py-3">Peluquería e Higiene</h3>
                    </a>
                  </div>
                </div>
                <div class="item-card">
                  <div class="subcategorias-card--item">
                    <a href="{{ url('/') }}sub-categorias">
                      <img class="img-responsive" id="item_producto" src="{{ url('images/categorias') }}/solicitado_3.jpg">
                      <h3 class="text-center py-3">Vitaminas y Suplementos</h3>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="widgets-items background-seccion-secondary py-3 row-less-margin">
        <div class="row no-row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center py-4">
          <div class="col text-center">
            <a href="{{ url('/') }}">
              <img title="Marca 01" src="{{ url('images/widgets') }}/widget_1.jpg" />
            </a>
          </div>
          <div class="col text-center">
            <a href="{{ url('/') }}">
              <img title="Marca 02" src="{{ url('images/widgets') }}/widget_2.jpg" />
            </a>
          </div>
          <div class="col text-center">
            <a href="{{ url('/') }}">
              <img title="Marca 03" src="{{ url('images/widgets') }}/widget_3.jpg" />
            </a>
          </div>
        </div>
      </div>

      <div class="py-4 background-seccion row-less-margin">
        <div class="position-relative row-more-margin">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <img class="img-responsive" src="{{ url('images/marcas') }}/marca_1.png">
            </div>
            <div class="item">
              <img class="img-responsive" src="{{ url('images/marcas') }}/marca_2.png">
            </div>
            <div class="item">
              <img class="img-responsive" src="{{ url('images/marcas') }}/marca_3.png">
            </div>
            <div class="item">
              <img class="img-responsive" src="{{ url('images/marcas') }}/marca_4.png">
            </div>
            <div class="item">
              <img class="img-responsive" src="{{ url('images/marcas') }}/marca_5.png">
            </div>
            <div class="item">
              <img class="img-responsive" src="{{ url('images/marcas') }}/marca_6.png">
            </div>
            <div class="item">
              <img class="img-responsive" src="{{ url('images/marcas') }}/marca_7.png">
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
