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
                <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#todo" data-toggle="tab">Todo</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="todo">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-hover">
                                            <th>Hardware</th>
                                            <th>Stock</th>
                                            @foreach($stock as $sk)
                                                <tr>
                                                    <td><a href="{{ route('stock.show', $sk->id) }}" class="btn btn-success btn-xs">{{ $sk->hardware->name }}</a></td>
                                                    @if($sk->quantity == 0)
                                                        <td class="btn btn-danger btn-xs">{{ $sk->quantity }}</td>
                                                    @elseif($sk->quantity > 0 && $sk->quantity < 5)
                                                        <td class="btn btn-warning btn-xs">{{ $sk->quantity }}</td>
                                                    @else
                                                        <td class="btn btn-success btn-xs">{{ $sk->quantity }}</td>                                                        
                                                    @endif
                                                </tr>
                                            @endforeach
                                            {!! $stock->fragment('hash')->appends(request()->query())->links('pagination::default') !!}
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
