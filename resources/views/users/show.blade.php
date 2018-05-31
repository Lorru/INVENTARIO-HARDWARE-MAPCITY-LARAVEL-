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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red">
                            <i class="fa fa-group"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Usuario : {{ $user->name }}</span>
                            <span class="info-box-text">Correo : {{ $user->email }}</span>
                            <span class="info-box-text">Perfil : {{ $user->roles->pluck('display_name')->implode(' - ') }}</span>
                            <span class="info-box-text"><a href="{{ route('usuarios.index') }}" class="btn btn-block btn-success btn-flat">Volver</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop