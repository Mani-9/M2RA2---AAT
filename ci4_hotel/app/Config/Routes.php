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
$routes->post('modificar_hotel', 'HotelesController::modificarHotel');
$routes->post('agregar_hotel', 'HotelesController::agregarHotel');