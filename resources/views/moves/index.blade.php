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
            <div class="row">
                <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#crear" data-toggle="tab">Crear</a></li>
                            <li><a href="#cerrar" data-toggle="tab">Cerrar</a></li>
                            <li><a href="#todo" data-toggle="tab">Todo</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="crear">
                                @if( session()->has('mensaje'))
                                    <div class="row mensajeMoves">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensaje') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @elseif( session()->has('mensajeElim'))
                                    <div class="row mensajeMoves">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensajeElim') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif                                    
                                <form action="{{ route('movimientos.store') }}" method="post" id="formMoves">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="customers">Clientes</label>
                                                <select name="customers" id="" class="form-control select2" style="width: 100%;">
                                                    @foreach($customers as $cust)
                                                        <option value="{{ $cust->id or old('customers') }}">{{ $cust->name_client }}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('customers', '<span class=alert alert-danger>:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="hardware">Hardware</label>
                                                <select name="hardware" id="" class="form-control select2" style="width: 100%;">
                                                    @foreach($hardware as $hard)
                                                        <option value="{{ $hard->id or old('hardware') }}">{{ $hard->name }}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('hardware', '<span class=alert alert-danger>:message</span>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="quantity" >Cantidad</label>
                                                <select name="quantity" id="" onchange="" class="form-control select2" style="width: 100%;">
                                                    @for($i = 1; $i < 10 ; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                {!! $errors->first('quantity', '<span class=alert alert-danger>:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="technicals">Tecnico</label>
                                                <select name="technicals" id="" class="form-control select2" style="width: 100%;">
                                                    @foreach($technicals as $tech)
                                                        <option value="{{ $tech->id or old('technicals') }}">{{ $tech->name }}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('technicals', '<span class=alert alert-danger>:message</span>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="supervisor">Supervisor</label>
                                                <input type="text" name="supervisor" id="" class="form-control" placeholder="Enter ..." value="{{ $moves->supervisor or old('supervisor') }}">
                                                {!! $errors->first('supervisor', '<span class=alert alert-danger>:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="commentary">Comentario</label>
                                                <textarea name="commentary" id=""  rows="2" class="form-control" placeholder="Enter ..." value="{{ $moves->entry_comment  or old('commentary') }}"></textarea>
                                                {!! $errors->first('commentary', "<span style='color: #dd4b39;'>:message</span>") !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" value="Generar" class="btn btn-block btn-primary btn-flat">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="cerrar">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-hover">
                                            <th>ID</th>
                                            <th>Hardware</th>
                                            <th>Cliente</th>
                                            <th>Tecnico</th>
                                            <th>Cantidad</th>
                                            <th>Fecha/Hora</th>
                                            <th>Comentario</th>
                                            <th>Acciones</th>
                                            @foreach($movesOpenState as $open)
                                                <tr>
                                                    <td><a href="{{ route('movimientos.show', $open->id) }}" class="btn btn-success btn-xs">{{ $open->id }}</a></td>
                                                    <td>{{$open->hardware->name}}</td>
                                                    <td>{{$open->customer->name_client}}</td>
                                                    <td>{{$open->technical->name}}</td>
                                                    <td>{{$open->quantity}}</td>
                                                    <td>{{$open->created_at}}</td>
                                                    <td>{{$open->entry_comment}}</td>
                                                    <td>
                                                        <a href="{{ route('movimientos.edit', $open->id) }}" class="btn btn-info btn-xs">Cerrar</a>
                                                        <form action="{{ route('movimientos.destroy', $open->id) }}" style="display: inline" method="post">
                                                            {!! csrf_field() !!}
                                                            {!! method_field('DELETE') !!}
                                                            <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {!! $movesOpenState->fragment('hash')->appends(request()->query())->links('pagination::default') !!}
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="todo">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-hover">
                                            <th>ID</th>
                                            <th>Cliente</th>
                                            <th>Tecnico</th>
                                            <th>Hardware</th>
                                            <th>Cantidad</th>
                                            <th>Supervisor</th>
                                            <th>Fecha/Hora Ingreso</th>
                                            <th>Fecha/Hora Cierre</th>
                                            <th>Comentario Ingreso</th>
                                            <th>Comentario Cierre</th>
                                            <th>Accion</th>
                                            @foreach($moves as $mov)
                                                <tr>
                                                    <td><a href="{{ route('movimientos.show', $mov->id) }}" class="btn btn-success btn-xs">{{ $mov->id }}</a></td>
                                                    <td>{{ $mov->customer->name_client}}</td>
                                                    <td>{{ $mov->technical->name}}</td>
                                                    <td>{{ $mov->hardware->name}}</td>
                                                    <td>{{ $mov->quantity}}</td>
                                                    <td>{{ $mov->supervisor}}</td>
                                                    <td>{{ $mov->created_at}}</td>
                                                    <td>{{ $mov->updated_at}}</td>
                                                    <td>{{ $mov->entry_comment}}</td>
                                                    <td>{{ $mov->comment_close}}</td>
                                                    <td>
                                                        <form action="{{ route('movimientos.destroy', $mov->id) }}" style="display: inline" method="post">
                                                            {!! csrf_field() !!}
                                                            {!! method_field('DELETE') !!}
                                                            <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {!! $moves->fragment('hash')->appends(request()->query())->links('pagination::default') !!}
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

