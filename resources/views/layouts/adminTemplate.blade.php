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
        <link rel="stylesheet" href="{{ asset('/css/icofont.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <link href="{{ url('css/adminlte.css') }}" rel="stylesheet">
        <link href="{{ url('css/OverlayScrollbars.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

        <script src="{{ url('js/app.js') }}"></script>
        <script src="{{ url('js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ url('js/adminlte.min.js') }}"></script>

        @yield('estilos')
        @yield('scripts-header')

    </head>

    <body class="hold-transition sidebar-mini layout-fixed" >

        <div class="wrapper">

            @include('layouts.partials.navbar')

            @include('layouts.partials.aside-left')

            <div class="content-wrapper">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                @section('top-left-submenus')
                                @show
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    @section('ruta-navegacion-container')
                                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    @show
                                </ol>
                            </div>
                        </div>
                    </div>
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

            @include('layouts.partials.footer')

        </div>

        @yield('scripts-footer')

    </body>

</html>
