<?php

use Fpt\Duan1\Controllers\Admin\UserController;
use Fpt\Duan1\Controllers\Admin\CategoryController;
use Fpt\Duan1\Controllers\Admin\DashboardController;
use Fpt\Duan1\Controllers\Admin\TheloaiController;
use Fpt\Duan1\Controllers\Client\HomeController;
use Fpt\Duan1\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/admin/theloai', TheloaiController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');