@extends('layout')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Usuarios</h1>
            <ol class="breadcrumb">
                <li><a href="#">Inventario</a></li>
                <li class="active"><i class="fa fa-group"></i>usuarios</li>
            </ol>
        </section>
        <section class="content">
            @if( session()->has('mensaje'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <h3>{{ session('mensaje') }}</h3>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row box box-body">
                <div class="col-md-12">
                    <form action="{{ route('usuarios.update', $user->id) }}" method="post">
                        {!! method_field('PUT') !!}
                        <img src="{{ Storage::url($user->avatar) }}" alt="" class="img-circle" width="100px" height="100px">
                        @include('users.form')
                    </form>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <a href="{{ route('usuarios.index') }}" class="btn btn-block btn-primary btn-flat">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop