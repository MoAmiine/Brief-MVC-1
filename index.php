<?php 
session_start();
include __DIR__ . '/vendor/autoload.php';
use App\Core\Database;
use App\Core\Router;

$db = new Database();
$router = new Router();
$router->dispatcher();

