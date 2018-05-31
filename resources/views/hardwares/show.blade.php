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
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="ion ion-android-laptop"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Nombre Hardware : {{ $hardware->name }}</span>
                            <span class="info-box-text">Proveedor : {{ $hardware->provider->name }}</span>
                            <span class="info-box-text"><a href="{{ route('hardware.index') }}" class="btn btn-block btn-success btn-flat">Volver</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop