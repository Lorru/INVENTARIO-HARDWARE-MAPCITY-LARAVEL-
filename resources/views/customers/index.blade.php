@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Clientes</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-heart"></i>Clientes</li>
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
                                @if( session()->has('mensajeElim'))
                                    <div class="row mensajeCustomers">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensajeElim') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @elseif( session()->has('mensaje'))
                                    <div class="row mensajeCustomers">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensaje') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <form action="{{ route('clientes.store') }}" method="post" id="formCustomers">
                                    @include('customers.form')
                                </form>
                            </div>
                            <div class="tab-pane" id="todo">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-hover">
                                            <th>Nombre</th>
                                            <th>Encargado</th>
                                            <th>Correo</th>
                                            <th>Piso</th>
                                            <th>Lugar</th>
                                            <th>Acciones</th>
                                            @foreach($customers as $cus)
                                                <tr>
                                                    <td><a href="{{ route('clientes.show', $cus->id) }}" class="btn btn-success btn-xs">{{ $cus->name_client }}</a></td>
                                                    <td>{{$cus->name_enriched}}</td>
                                                    <td>{{$cus->email}}</td>
                                                    <td>{{$cus->place}}</td>
                                                    <td>{{$cus->dependence->name}}</td>
                                                    <td>
                                                        <a href="{{ route('clientes.edit', $cus->id) }}" class="btn btn-info btn-xs">Editar</a>
                                                        <form action="{{ route('clientes.destroy', $cus->id) }}" style="display: inline" method="post">
                                                            {!! csrf_field() !!}
                                                            {!! method_field('DELETE') !!}
                                                            <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {!! $customers->fragment('hash')->appends(request()->query())->links('pagination::default') !!}
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