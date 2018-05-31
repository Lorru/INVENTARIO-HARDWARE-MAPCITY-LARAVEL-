<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventario</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('links.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php
    function activeMenu($url)
    {
      return request()->is($url) ? 'active' : '';
    }
  ?>
<div class="wrapper">
  <header class="main-header">
  <a href="{{ route('inicio') }}" class="logo">
      <span class="logo-mini"><b>S</b>IN</span>
      <span class="logo-lg"><b>Soporte</b>Inventario</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE NAVEGACION</li>
        <li class="{{ activeMenu('/') }}"><a href="{{ route('inicio') }}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li class="{{ activeMenu('clientes') }}"><a href="{{ route('clientes.index') }}"><i class="fa fa-heart"></i> <span>Clientes</span></a></li>
        <li class="{{ activeMenu('proveedores') }}"><a href="{{ route('proveedores.index') }}"><i class="fa fa-truck"></i> <span>Proveedores</span></a></li>
        <li class="{{ activeMenu('hardware') }}"><a href="{{ route('hardware.index') }}"><i class="fa fa-hdd-o"></i> <span>Hardware</span></a></li>
        <li class="{{ activeMenu('stock') }}"><a href="{{ route('stock.index') }}"><i class="fa fa-pie-chart"></i> <span>Stock</span></a></li>
        <li class="{{ activeMenu('movimientos') }}"><a href="{{ route('movimientos.index') }}"><i class="fa fa-exchange"></i> <span>Movimientos</span></a></li>
      </ul>
    </section>
  </aside>
  @yield('contenido')
  <footer class="main-footer">
    <strong>Copyleft &copy; 2018 <a href="">GeoBPO</a>.</strong>
  </footer>
</div>
@include('links.js')
</body>
</html>
