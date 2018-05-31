@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Inicio</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-home"></i>Inicio</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="ion ion-heart"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Clientes</span>
                            <span class="info-box-number">N° {{ $customers }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-android-cart"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Proveedores</span>
                            <span class="info-box-number">N° {{ $providers }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="ion ion-android-laptop"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Hardware</span>
                            <span class="info-box-number">N° {{ $hardwares }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-stats-bars"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Movimientos</span>
                            <span class="info-box-text">Abiertos N° {{ $movesOpenState }}</span>
                            <span class="info-box-text">Cerrados N° {{ $movesCloseState }}</span>
                            <span class="info-box-text">Total N° {{ $moves }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop