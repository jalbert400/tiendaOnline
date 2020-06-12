<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
*/

//WEB
Route::get('/', 'HomeController@index')->name('modulo.web.index');

//CUENTA
Route::get('/cuenta', 'Web\CuentaCliente\CuentaController@index')->name('modulo.cuenta.index');
Route::get('/cuenta/mis-datos-personales', 'Web\CuentaCliente\CuentaController@cuentaDatosPersonales')->name('modulo.cuenta.cuenta-datos-personales');
Route::get('/cuenta/actualizar-password', 'Web\CuentaCliente\CuentaController@cuentaActualizarPassword')->name('modulo.cuenta.cuenta-actualizar-password');
Route::get('/cuenta/historial-pedidos', 'Web\CuentaCliente\CuentaController@cuentaHistorialPedidos')->name('modulo.cuenta.cuenta-historial-pedidos');
Route::get('/cuenta/detalle-historial-pedido', 'Web\CuentaCliente\CuentaController@cuentaDetalleHistorialPedido')->name('modulo.cuenta.cuenta-detalle-historial-pedido');
Route::get('/cuenta/cupones-descuento', 'Web\CuentaCliente\CuentaController@cuentaCuponesDescuento')->name('modulo.cuenta.cuenta-cupones-descuento');

//SERVICIO-CLIENTE
Route::get('/servicio-cliente/quienes-somos', 'Web\ServicioCliente\ServicioClienteController@index')->name('modulo.servicio-cliente.quienes-somos');
Route::get('/servicio-cliente/como-comprar', 'Web\ServicioCliente\ServicioClienteController@index')->name('modulo.servicio-cliente.como-comprar');
Route::get('/servicio-cliente/devoluciones', 'Web\ServicioCliente\ServicioClienteController@index')->name('modulo.servicio-cliente.devoluciones');
Route::get('/servicio-cliente/libro-reclamaciones', 'Web\ServicioCliente\ServicioClienteController@index')->name('modulo.servicio-cliente.libro-reclamaciones');
Route::get('/servicio-cliente/politica-privacidad', 'Web\ServicioCliente\ServicioClienteController@index')->name('modulo.servicio-cliente.politiva-privacidad');
Route::get('/servicio-cliente/preguntas-frecuentes', 'Web\ServicioCliente\ServicioClienteController@index')->name('modulo.servicio-cliente.preguntas-frecuentes');
Route::get('/servicio-cliente/terminos-condiciones', 'Web\ServicioCliente\ServicioClienteController@index')->name('modulo.servicio-cliente.terminos-condiciones');

//PRODUCTOS
Route::get('/categorias', 'Web\Productos\ProductosController@categorias')->name('modulo.productos.categorias');
Route::get('/sub-categorias', 'Web\Productos\ProductosController@subCategorias')->name('modulo.productos.sub-categorias');
Route::get('/sub-categoria-detalle', 'Web\Productos\ProductosController@subCategoriaDetalle')->name('modulo.productos.sub-categoria-detalle');
Route::get('/producto-detalle', 'Web\Productos\ProductosController@productoDetalle')->name('modulo.productos.producto-detalle');
Route::get('/carrito', 'Web\Productos\ProductosController@carrito')->name('modulo.productos.carrito');

//PEDIDOS
Route::get('/pedido-datos-entrega', 'Web\Pedidos\PedidosController@pedidoDatosEntrega')->name('modulo.pedidos.pedido-datos-entrega');
Route::get('/pedido-pago', 'Web\Pedidos\PedidosController@pedidoPago')->name('modulo.pedidos.pedido-pago');
Route::get('/pedido-confirmacion', 'Web\Pedidos\PedidosController@pedidoConfirmacion')->name('modulo.pedidos.pedido-confirmacion');
Route::get('/pedido-realizado', 'Web\Pedidos\PedidosController@pedidoRealizado')->name('modulo.pedidos.pedido-realizado');

//LOGIN
Route::get('/web-admin', 'Modulos\Auth\LoginController@index')->name('modulo.login.index');
Route::post('/web-admin', 'Modulos\Auth\LoginController@login')->name('modulo.login.acceso');
Route::get('/administrador', 'AdministradorController@index')->name('modulo.administrador.index');

//SESSION LOGOUT
Route::post('/logout', 'Modulos\Auth\LoginController@logout')->name('modulo.login.logout');

// --------------      -------------- //
// -------------- JSON -------------- //
// --------------      -------------- //

//ADMINISTRATOR - LIST DASHBOARD
Route::get('/administrador/lista', 'AdministradorController@list')->name('modulo.administrador.list');
