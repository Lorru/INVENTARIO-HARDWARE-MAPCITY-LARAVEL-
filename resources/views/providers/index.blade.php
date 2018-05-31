@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Proveedores</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-truck"></i>Proveedores</li>
            </ol>
        </section>
        <section class="content">
            @php $i = 0; @endphp
            @foreach($providers as $pro)
                @if(($i%2) == 0)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-widget widget-user">
                                <div class="widget-user-header bg-green-active">
                                <h3 class="widget-user-username">{{ $pro->name }}</h3>
                                </div>
                                <div class="widget-user-image">
                                <img class="img-circle" src="{{ Storage::url($pro->avatar) }}" alt="Avatar">
                                </div>
                                <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $pro->telephone }}</h5>
                                        <span class="description-text">Telefono</span>
                                    </div>
                                    </div>
                                    <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $pro->place }}</h5>
                                        <span class="description-text">Lugar</span>
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $pro->web_cite }}</h5>
                                        <span class="description-text">Pagina Web</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                @else

                        <div class="col-md-6">
                            <div class="box box-widget widget-user">
                                <div class="widget-user-header bg-green-active">
                                <h3 class="widget-user-username">{{ $pro->name }}</h3>
                                </div>
                                <div class="widget-user-image">
                                <img class="img-circle" src="{{ Storage::url($pro->avatar) }}" alt="Avatar">
                                </div>
                                <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $pro->telephone }}</h5>
                                        <span class="description-text">Telefono</span>
                                    </div>
                                    </div>
                                    <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $pro->place }}</h5>
                                        <span class="description-text">Lugar</span>
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $pro->web_cite }}</h5>
                                        <span class="description-text">Pagina Web</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif                            
                @php $i++; @endphp
            @endforeach
        </section>
    </div>
@stop