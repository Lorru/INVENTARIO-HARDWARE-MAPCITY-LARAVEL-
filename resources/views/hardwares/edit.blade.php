@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Hardware</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-hdd-o"></i>hardware</li>
            </ol>
        </section>
        <section class="content">
            @if( session()->has('mensaje'))
                <div class="row" class="mensajeHardwares">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <h3>{{ session('mensaje') }} <i class="fa fa-check"></i></h3>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row box box-body">
                <div class="col-md-12">
                    <form action="{{ route('hardware.update', $hardware->id) }}" method="post" id="formHardwares">
                        {!! method_field('PUT') !!}
                        @include('hardwares.form')
                    </form>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <a href="{{ route('hardware.index') }}" class="btn btn-block btn-primary btn-flat">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop