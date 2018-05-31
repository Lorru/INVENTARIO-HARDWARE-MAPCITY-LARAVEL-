@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Clientes</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-heart"></i>clientes</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="ion ion-heart"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Nombre Cliente : {{ $customer->name_client }}</span>
                            <span class="info-box-text">Enrcargado : {{ $customer->name_enriched }}</span>
                            <span class="info-box-text">Correo : {{ $customer->email }}</span>
                            <span class="info-box-number">Lugar : {{ $customer->place }}</span>
                            <span class="info-box-text">Dependencia : {{ $customer->dependence->name }}</span>
                            <span class="info-box-text"><a href="{{ route('clientes.index') }}" class="btn btn-block btn-primary btn-flat">Volver</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop