@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Hardware</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-hdd-o"></i>Hardware</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#ingresar" data-toggle="tab">Ingresar</a></li>
                            <li><a href="#todo" data-toggle="tab">Todo</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="ingresar">
                                @if( session()->has('mensaje'))
                                    <div class="row mensajeHardwares">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensaje') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @elseif( session()->has('mensajeElim'))
                                    <div class="row mensajeHardwares">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensajeElim') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <form action="{{ route('hardware.store') }}" method="post" id="formHardwares">
                                    @include('hardwares.form')
                                </form>
                            </div>
                            <div class="tab-pane" id="todo">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-hover">
                                            <th>ID</th>
                                            <th>Hardware</th>
                                            <th>Proveedor</th>
                                            <th>Acciones</th>
                                            @foreach($hardwares as $hard)
                                                <tr>
                                                    <td><a href="{{ route('hardware.show', $hard->id) }}" class="btn btn-success btn-xs">{{ $hard->id }}</a></td>
                                                    <td>{{ $hard->name }}</td>
                                                    <td>{{ $hard->provider->name }}</td>
                                                    <td>
                                                        <a href="{{ route('hardware.edit', $hard->id) }}" class="btn btn-info btn-xs">Editar</a>
                                                        <form action="{{ route('hardware.destroy', $hard->id) }}" style="display: inline" method="post">
                                                            {!! csrf_field() !!}
                                                            {!! method_field('DELETE') !!}
                                                            <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {!! $hardwares->fragment('hash')->appends(request()->query())->links('pagination::default') !!}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop