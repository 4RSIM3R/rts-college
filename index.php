<?php

use Controller\Admin\AdminController;
use Controller\Auth\AuthController;
use Controller\Home\HomeController;
use Core\Router;
use Dotenv\Dotenv;
use Middleware\AuthMiddleware;

require "vendor/autoload.php";

try {
	$dotenv = Dotenv::createImmutable(__DIR__);
	$dotenv->load();
} catch (Exception $e) {
	var_dump($e);
	die(0);
}

$router = new Router();

$router::get('/', HomeController::class, "home", []);

// Auth
$router::get('/login', AuthController::class, "viewLogin", []);
$router::post('/post-login', AuthController::class, "doLogin", []);

// Get All Tenant
$router::get('/admin', AdminController::class, "getAllTenant", [AuthMiddleware::class]);

// Create Tenant
$router::get('/tenant/add', AdminController::class, "viewAddTenant", [AuthMiddleware::class]);
$router::post('/tenant/post', AdminController::class, "doAddTenant", [AuthMiddleware::class]);

// Update Tenant
$router::get('/tenant/edit', AdminController::class, "viewEditTenant", [AuthMiddleware::class]);
$router::post('/tenant/update', AdminController::class, "doEditTenant", [AuthMiddleware::class]);

$router::post('/tenant/delete', AdminController::class, "deleteTenant", [AuthMiddleware::class]);

$router::run();

