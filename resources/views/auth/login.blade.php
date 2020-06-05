@extends('layouts.loginTemplate')

@section('title_page', 'Login')

@section('title_description', 'Autentica la sesión de usuario')

@section('content_form_login')

    <section class="container-login">

        <div id="reloadLogin"></div>
        <div class="cuadro-content-login"  >

                <h2 class="text-center"><strong>INGRESA AL SISTEMA TIENDA ONLINE</i></strong></h2>
                <form method="POST" action="{{ route('modulo.login.acceso') }}" aria-label="{{ __('Login') }}" id="form_login" autocomplete="off" class="form " enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('email') ? ' has-error':'' }}">
                        <label for="email" class="col-form-label family">Email</label>
                        <input id="ByCript" type="text" class="d-none" name="ByCript">
                        <input id="email" value="admin@gmail.com" type="text" class="form-control @error('email') is-invalid @enderror" name="email" autofocus>
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error':'' }}">
                        <label for="password" class="col-form-label family">Password</label>
                        <input id="password" value="123456789" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="button-submit" id="ingresar">
                            {{ __('Ingresar') }}
                        </button>
                    </div>

                    <div class="form-group text-right">
                        <a class="btn btn-link" href="javascript:void(0)">
                            {{ __('Olvido su contraseña?') }}
                        </a>
                    </div>

                </form>

        </div>

    </section>

@endsection

@section('scripts-footer')
    <script>

        $("body").on("click",".button-submit", function(){

            $(".cuadro-content-login").addClass("d-none")
            $("#reloadLogin").html(`<div id="carga_person"><div class="loader">Loading...</div></div>`)

            let usuario = $("#email").val()
            let password = $("#password").val()
            let key = $('input[name="_token"]').val()

            let us = CryptoJS.AES.encrypt(JSON.stringify(usuario), key, {format: CryptoJSAesJson}).toString();
            let pass = CryptoJS.AES.encrypt(JSON.stringify(password), key, {format: CryptoJSAesJson}).toString();

            let dataSend = {
                "us":us,
                "pass":pass
            }

            $("#ByCript").val(JSON.stringify(dataSend))
            $("#email").val(JSON.parse(us).iv)
            $("#password").val(JSON.parse(pass).iv)

        })

    </script>
@endsection
