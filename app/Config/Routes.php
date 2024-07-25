<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
    return redirect()->to('login');
});
$routes->get('/login', 'Auth\Login::index', ['as' => 'login']); 
$routes->get('/admin/dashboard', 'Dashboard\Admin\OverviewController::index', ['as' => 'admin.dashboard']); 