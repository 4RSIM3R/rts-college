<?php

use Controller\Admin\AdminController;
use Controller\Auth\AuthController;
use Controller\Home\HomeController;
use Core\Router;
use Dotenv\Dotenv;

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
$router::get('/admin', AdminController::class, "getAllTenant", []);

// Create Tenant
$router::get('/tenant/add', AdminController::class, "viewAddTenant", []);
$router::post('/tenant/post', AdminController::class, "doAddTenant", []);

// Update Tenant
$router::get('/tenant/edit', AdminController::class, "viewEditTenant", []);
$router::post('/tenant/update', AdminController::class, "doEditTenant", []);

$router::post('/tenant/delete', AdminController::class, "deleteTenant", []);

$router::run();

