<?php

use Controller\Admin\AdminController;
use Controller\Auth\AuthController;
use Controller\Home\HomeController;
use Controller\Room\RoomController;
use Controller\Tenant\TenantController;
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

session_start();

$router = new Router();

$router::get('/', HomeController::class, "home", []);

// Auth
$router::get('/login', AuthController::class, "viewLogin", []);
$router::post('/post-login', AuthController::class, "doLogin", []);

// Get All Schedule
$router::get('/admin', AdminController::class, "getAllSchedule", [AuthMiddleware::class]);

// Create Schedule
$router::get('/admin/add', AdminController::class, "viewAddSchedule", [AuthMiddleware::class]);
$router::post('/admin/post', AdminController::class, "doAddSchedule", [AuthMiddleware::class]);

$router::get('/admin/edit', AdminController::class, "viewEditSchedule", [AuthMiddleware::class]);
$router::post('/admin/update', AdminController::class, "doEditSchedule", [AuthMiddleware::class]);

$router::get('/admin/delete', AdminController::class, "deleteSchedule", [AuthMiddleware::class]);

// Get All Tenant
$router::get('/admin/tenant', TenantController::class, "getAllTenant", [AuthMiddleware::class]);

// Create Tenant
$router::get('/admin/tenant/add', TenantController::class, "viewAddTenant", [AuthMiddleware::class]);
$router::post('/admin/tenant/post', TenantController::class, "doAddTenant", [AuthMiddleware::class]);

// Update Tenant
$router::get('/admin/tenant/edit', TenantController::class, "viewEditTenant", [AuthMiddleware::class]);
$router::post('/admin/tenant/update', TenantController::class, "doEditTenant", [AuthMiddleware::class]);

$router::get('/admin/tenant/delete', TenantController::class, "deleteTenant", [AuthMiddleware::class]);

// Get All Room
$router::get('/admin/room', RoomController::class, "getAllRoom", [AuthMiddleware::class]);

// Create Room
$router::get('/admin/room/add', RoomController::class, "viewAddRoom", [AuthMiddleware::class]);
$router::post('/admin/room/post', RoomController::class, "doAddRoom", [AuthMiddleware::class]);

// Update Room
$router::get('/admin/room/edit', RoomController::class, "viewEditRoom", [AuthMiddleware::class]);
$router::post('/admin/room/update', RoomController::class, "doEditRoom", [AuthMiddleware::class]);

$router::get('/admin/room/delete', RoomController::class, "deleteRoom", [AuthMiddleware::class]);

$router::run();

