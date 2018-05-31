@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Movimientos</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-exchange"></i>Movimientos</li>
            </ol>
        </section>
        <section class="content">
            @if( session()->has('mensaje'))
                <div class="row mensajeMoves">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <h3>{{ session('mensaje') }}</h3>
                        </div>
                    </div>
                </div>
            @endif                
            <form action="{{ route('movimientos.update', $move->id) }}" method="post">
                {!! csrf_field() !!}
                {!! method_field('PUT') !!}
                <div class="row box box-solid">
                    <div class="col-md-6">
                        <span class="info-box-number">Id Movimiento - {{$move->id}}</span>
                        <span class="info-box-text"><i class="fa fa-circle-o text-red"></i> Cliente : {{$move->customer->name_cliente}}</span>
                        <span class="info-box-text"><i class="fa fa-circle-o text-red"></i> Supervisor : {{$move->supervisor}}</span>
                        <span class="info-box-text"><i class="fa fa-circle-o text-red"></i> Tecnico a Cargo : {{$move->technical->name}}</span>
                        <span class="info-box-text"><i class="fa fa-circle-o text-red"></i> Hardware : {{$move->hardware->name}}</span>
                        <span class="info-box-text"><i class="fa fa-circle-o text-red"></i> Cantidad : {{$move->quantity}}</span>
                        <span class="info-box-text"><i class="fa fa-circle-o text-red"></i> Comentario : {{$move->entry_comment}}</span>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="commentary">Comentario</label>
                            <textarea name="commentary" id="" rows="3" class="form-control" placeholder="Enter..."></textarea>
                            {!! $errors->first('commentary', "<span style='color: #dd4b39;'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Cerrar" class="btn btn-block btn-primary btn-flat">
                        </div>
                        <div class="form-group">
                            <a href="{{ route('movimientos.index') }}" class="btn btn-block btn-success btn-flat">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@stop