@extends('layouts.adminTemplate')

@section('title_page', 'Banners - Creación')

@section('estilos')

@endsection
@section('scripts-header')

@endsection

@section('top-left-submenus')
    @parent
    {{-- Menu Top--}}
@endsection

@section('title-container')
     <h4 class="m-0 text-dark text-uppercase">Creación de Banners</h4>

@endsection
@section('ruta-navegacion-container')
    @parent
     <li class="breadcrumb-item active"><a href="{{route('modulo.banner.index')}}"> Banners </a> </li>
     <li class="breadcrumb-item active">Creación</li>
@endsection

@section('aside-right')
    {{-- Aqui el aside del lado derecho, ingresar lo que sedea mostrar--}}
@endsection

@section('content')
    @parent

    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header px-2 py-1">
                        <a href="{{route('modulo.banner.index')}}" class="btn btn-sm btn-outline-success shadow-sm mx-1"><i class="fa fa-arrow-left"></i> Atras</a>
                    </div>

                    <div class="card-body px-2 py-1">
                            <section id="form_store_load"></section>
                            <section class="form row my-2 mx-0" id="form_store_detail">
                              <div class="form-group row mx-0 px-2 col-12 col-sm-12 col-md-6 col-lg-6 ">
                                <label for="nombreStore" class="col-sm-5 col-md-4 col-form-label col-form-label-sm mb-0 px-0">Nombre: </label>
                                <input type="text" name="nombreStore" id="nombreStore" class="col-sm-7 col-md-8 form-control form-control-sm shadow-sm text-uppercase validateText" autocomplete="off">
                              </div>
                              <div class="form-group row mx-0 px-2 col-12 col-sm-12 col-md-6 col-lg-6 ">
                                <label for="nombreStore" class="col-sm-5 col-md-4 col-form-label col-form-label-sm mb-0 px-0">Imagen: </label>
                                <input type="text" name="nombreStore" id="nombreStore" class="col-sm-7 col-md-8 form-control form-control-sm shadow-sm text-uppercase validateText" autocomplete="off">
                              </div>
                              <div class="form-group row mx-0 px-2 col-12 col-sm-12 col-md-6 col-lg-6 ">
                                <label for="nombreStore" class="col-sm-5 col-md-4 col-form-label col-form-label-sm mb-0 px-0">Enlace: </label>
                                <input type="text" name="nombreStore" id="nombreStore" class="col-sm-7 col-md-8 form-control form-control-sm shadow-sm text-uppercase validateText" autocomplete="off">
                              </div>
                              <div class="form-group row mx-0 px-2 col-12 col-sm-12 col-md-6 col-lg-6 ">
                                <label for="nombreStore" class="col-sm-5 col-md-4 col-form-label col-form-label-sm mb-0 px-0">Orden: </label>
                                <input type="text" name="nombreStore" id="nombreStore" class="col-sm-7 col-md-8 form-control form-control-sm shadow-sm text-uppercase validateText" autocomplete="off">
                              </div>





                              <div class="form-group row justify-content-center mx-0 px-2 col-12 errors_message" id="errors_store">

                              </div>

                              <div class="form-group row mx-0 px-2 col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                                   <a href="javascript:void(0)" class="btn btn-sm btn-outline-primary shadow-sm" id="crearBanner">Crear Banner</a>
                              </div>

                            </section>
                    </div>
                </div>
        </div>
    </div>
@endsection

