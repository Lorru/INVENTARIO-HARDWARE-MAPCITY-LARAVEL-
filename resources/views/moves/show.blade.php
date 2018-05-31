@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Movimientos</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-truck"></i>Movimientos</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-stats-bars"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-number">Id Movimiento - {{ $move->id }}</span>
                            <span class="info-box-text">Cliente : {{ $move->customer->name_client }}</span>
                            <span class="info-box-text">Supervisor : {{ $move->supervisor }}</span>
                            <span class="info-box-text">Hardware : {{ $move->hardware->name }}</span>
                            <span class="info-box-number">Cantidad : {{ $move->quantity }}</span>
                            <span class="info-box-text">Tecnico a Cargo : {{ $move->technical->name }}</span>
                            <span class="info-box-text"><a href="{{ route('movimientos.index') }}" class="btn btn-block btn-primary btn-flat">Volver</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop