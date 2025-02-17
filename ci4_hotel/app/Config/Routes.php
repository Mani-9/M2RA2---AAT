<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//hoteles   
$routes->get('ver_hoteles', 'HotelesController::index');
$routes->get('agregar_hotel', 'HotelesController::nuevoHotel');
$routes->get('eliminar_hotel/(:num)', 'HotelesController::eliminarHotel/$1');
$routes->get('buscar_hotel/(:num)', 'HotelesController::buscarHotel/$1');
$routes->get('ordenar_hotel_acendente', 'HotelesController::ordenarHotelesAcendente');
$routes->get('ordenar_hotel_decendente', 'HotelesController::ordenarHotelesDecendente');
$routes->post('modificar_hotel', 'HotelesController::modificarHotel');
$routes->post('agregar_hotel', 'HotelesController::agregarHotel');

//clientes
$routes->get('ver_clientes','ClientesController::index');
$routes->get('agregar_cliente','ClientesController::nuevocliente');
$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');
$routes->get('buscar_cliente/(:num)', 'ClientesController::buscarcliente/$1');
$routes->get('ordenar_id_acendente', 'ClientesController::ordenarClientesAcendente');
$routes->get('ordenar_id_decendente', 'ClientesController::ordenarClientesDecendente');
$routes->post('modificar_cliente', 'ClientesController::modificarClientes');
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');

//reservaciones
$routes->get('ver_reservaciones','ReservacionesController::index');
$routes->get('agregar_reservacion', 'ReservacionesController::nuevaReservacion'); 
$routes->get('eliminar_reservacion/(:num)', 'ReservacionesController::eliminarReservacion/$1');
$routes->get('buscar_reservacion/(:num)', 'ReservacionesController::buscarReservacion/$1');
$routes->get('ordenar_reservaciones_acendente', 'ReservacionesController::ordenarReservacionesAcendente');
$routes->get('ordenar_reservacione_decendente', 'ReservacionesController::ordenarreservacionesDecendente');
$routes->get('ordenar_id_clientes_acendente', 'ReservacionesController::ordenarClientesAcendente');
$routes->get('ordenar_id_clientes_decendente', 'ReservacionesController::ordenarClienteDecendente');
$routes->post('modificar_reservacion', 'ReservacionesController::modificarReservacion');
$routes->post('agregar_reservacion', 'ReservacionesController::agregarReservacion');