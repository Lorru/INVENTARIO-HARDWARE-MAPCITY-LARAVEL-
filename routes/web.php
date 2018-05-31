<?php

Route::get('/', [ 'as' => 'inicio', 'uses' => 'PageControllers@start']);

Route::resource('clientes', 'CustomersControllers');
Route::resource('proveedores', 'ProvidersControllers');
Route::resource('hardware', 'HardwareControllers');
Route::resource('stock', 'StockControllers');
Route::resource('movimientos', 'MovesControllers');
Route::resource('usuarios', 'UsersControllers');
