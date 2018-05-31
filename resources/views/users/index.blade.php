@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Usuarios</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-group"></i>Usuarios</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#crear" data-toggle="tab">Crear</a></li>
                            <li><a href="#todo" data-toggle="tab">Todo</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="crear">
                                @if( session()->has('mensaje'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensaje') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @elseif( session()->has('mensajeElim'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <h3>{{ session('mensajeElim') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <form action="{{ route('usuarios.store') }}" method="post" enctype="multipart/form-data">
                                    @include('users.form', ['user' => new App\User])
                                </form>
                            </div>
                            <div class="tab-pane" id="todo">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-hover">
                                            <th>Avatar</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Perfil</th>
                                            <th>Acciones</th>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td><img src="{{Storage::url($user->avatar)}}" alt="" width="100px" height="100px" class="img-circle"></td>
                                                    <td><a href="{{ route('usuarios.show', $user->id) }}" class="btn btn-success btn-xs">{{ $user->name }}</a></td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{ $user->roles->pluck('display_name')->implode(' - ') }}</td>
                                                    <td>
                                                        <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-info btn-xs">Editar</a>
                                                        <form action="{{ route('usuarios.destroy', $user->id) }}" style="display: inline" method="post">
                                                            {!! csrf_field() !!}
                                                            {!! method_field('DELETE') !!}
                                                            <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {!! $users->fragment('hash')->appends(request()->query())->links('pagination::default') !!}
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