<?php 
session_start();
include __DIR__ . '/vendor/autoload.php';
use App\Core\Database;
use App\Core\Router;
header('Location: ../../src/View/Home.php');
$db = new Database();
$router = new Router();
$router->dispatcher();

