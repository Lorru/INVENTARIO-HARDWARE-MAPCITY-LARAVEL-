@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Stock</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-pie-chart"></i>Stock</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="fa fa-pie-chart"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Hardware - {{ $stock->hardware->name }}</span>
                            <span class="info-box-number">Stock : {{ $stock->quantity }}</span>
                            <span class="info-box-text"><a href="{{ route('stock.index') }}" class="btn btn-block btn-success btn-flat">Volver</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop