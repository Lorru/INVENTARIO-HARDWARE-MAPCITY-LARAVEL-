<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creacion de Movimientos - Inventario</title>
    @include('links.css')
</head>
<body>
    <section class="content container content-wrapper">
        <div class="row">
            <div class="box box-solid">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>Creacion de Movimientos</h3>
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-stats-bars"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-number">ID Movimiento - {{ $moves->id }}</span>
                            <span class="info-box-text">Cliente : {{ $moves->customer->name_client }}</span>
                            <span class="info-box-text">Jefe Plataforma : {{ $moves->customer->name_enriched }}</span>
                            <span class="info-box-text">Supervisor : {{ $moves->supervisor }}</span>
                            <span class="info-box-text">Tecnico : {{ $moves->technical->name }}</span>
                            <span class="info-box-text">Hardware : {{ $moves->hardware->name }}</span>
                            <span class="info-box-number">Cantidad : {{ $moves->quantity }}</span>
                            <span class="info-box-text">Fecha/Hora : {{ $moves->created_at }}</span>
                            <span class="info-box-text">Comentario : {{ $moves->entry_comment }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('links.js')
</body>
</html>