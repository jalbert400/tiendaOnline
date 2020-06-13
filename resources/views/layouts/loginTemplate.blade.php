<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title_page') | {{ config('app.name', 'Sistema') }} | {{  Config::get('session.lifetime') }} </title>
        <meta name="description" content="@yield('title_description') | {{ config('app.name', 'Sistema') }}" />

        <link rel="shortcut icon" href="{{ url('/images/logos/icon.png') }}" />
        <link rel="stylesheet" href="{{ asset('/css/icofont.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/login.css') }}">
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

        <script src="{{ asset('library/crypt/aes.js') }}"></script>
        <script src="{{ asset('library/crypt/aes-json-format.js') }}"></script>

    </head>
    <body class="full-screen">

        @yield('content_form_login')
        @yield('scripts-footer')

    </body>
</html>
