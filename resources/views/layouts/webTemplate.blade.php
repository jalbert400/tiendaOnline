<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title_page') | {{ config('app.name', 'Sistema') }} | {{  Config::get('session.lifetime') }} </title>
        <meta name="description" content="@yield('title_description') | {{ config('app.name', 'Sistema') }}" />

        <link rel="shortcut icon" href="{{ url('images') }}/logos/icon.png" />
        <script src="https://use.fontawesome.com/d2e70042f5.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <script type="text/javascript" src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}" />
        <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>

        <link rel="stylesheet" type="text/css" href="{{ url('css/top.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/bottom.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/estructura.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/media.css') }}" />

        <script type="text/javascript" src="{{ url('js/inicializacion.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/js.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/jQuery.equalHeights.js') }}"></script>

        <script type="text/javascript" src="{{ url('js/pushbar.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/flexslider.css') }}" />
        <script type="text/javascript" src="{{ url('js/jquery.flexslider.js') }}"></script>

        <link href="{{ url('css/owl/owl.carousel.min.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ url('js/owl/owl.carousel.js') }}"></script>
        <link rel="stylesheet" href="{{ url('css/owlcarousel/assets/owl.theme.default.min.css') }}">

        <script type="text/javascript">
          //Cargamos el banner
          $(function() {
            //if($.isFunction('owlCarousel')){
            //}
            $('.banner-owl').owlCarousel({
              loop: true,
              autoplay: true,
              autoplaySpeed: 2000,
              margin: 0,
              navText: ['', ''],
              nav: true,
              responsive: {
                0: {
                  items: 1
                }
              }
            })
            //Cargamos el carrusel - Ofertas
            $('.sub-categorias-owl').owlCarousel({
              loop: true,
              margin: 20,
              navText: ['', ''],
              nav: true,
              dots: false,
              autoplay: true,
              autoplayTimeout: 3000,
              autoplaySpeed: 2000,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1,
                  nav: true
                },
                600: {
                  items: 3,
                  nav: false
                },
                992: {
                  items: 4
                }
              }
            })
            //Cargamos el carrusel - Productos Destacados
            $('.productos-detacados-owl').owlCarousel({
              loop: true,
              margin: 20,
              navText: ['', ''],
              nav: true,
              dots: false,
              autoplay: true,
              autoplayTimeout: 3000,
              autoplaySpeed: 2000,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1,
                  nav: true
                },
                600: {
                  items: 3,
                  nav: false
                },
                992: {
                  items: 4
                }
              }
            })
            //Cargamos el carrusel - Detalle de Productos
            $('.productos-relacionados-owl').owlCarousel({
              loop: true,
              margin: 20,
              navText: ['', ''],
              nav: true,
              dots: false,
              autoplay: true,
              autoplayTimeout: 3000,
              autoplaySpeed: 2000,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1,
                  nav: true
                },
                600: {
                  items: 3,
                  nav: false
                },
                992: {
                  items: 4
                }
              }
            })
          });
          //Cargamos el carrusel - Marcas
          $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
              loop: true,
              nav: false,
              margin: 20,
              items: 7,
              dots: false,
              autoplay: true,
              autoplayTimeout: 3000,
              autoplaySpeed: 2000,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 2,
                  nav: true
                },
                600: {
                  items: 4,
                  nav: false
                },
                992: {
                  items: 7
                }
              }
            })
          })

      </script>
      <!-- SLIDER PRODUCTOS DETALLES -->
      <script type="text/javascript">
        $(document).ready(function($) {
          $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            itemWidth: 80,
            itemMargin: 5,
            asNavFor: '#slider-1'
          });
          $('#slider-1').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            sync: "#carousel",
            start: function(slider) {
              $('body').removeClass('loading');
            }
          });
        });
      </script>
      <!-- INIIALIZADOR DE LA LIBRERIA PUSHBAR -->
      <script type="text/javascript">
        $(document).ready(function() {
          var pushbar = new Pushbar({
            blur: true,
            overlay: true
          })
        });
        //equalHeight($(".item-card  .subcategorias-card--item"));
        //$('.subcategorias-card--item').equalHeights();
      </script>
      <script type="text/javascript">
        $(function() {
          //$('.productos-detacados-card .product-card-container').equalHeights();
        });
      </script>

        @yield('estilos')
        @yield('scripts-header')

    </head>

    <body class="hold-transition sidebar-mini layout-fixed" >

        <div class="wrapper">

            @include('layouts.partialsWeb.header')


            <div class="content-wrapper">

                <div class="content-header">

                </div>

                <section class="content" id="app">
                    <div class="container-fluid">
                        @section('content')
                            @include("errors.modalErrors")
                            @include("errors.modalReload")
                            @include("success.successModal")
                        @show
                    </div>
                </section>

            </div>

            @include('layouts.partialsWeb.footer')

        </div>

        @yield('scripts-footer')

    </body>

</html>
