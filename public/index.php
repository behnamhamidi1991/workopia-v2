<?php
require '../helpers.php'; 

require basePath('Router.php');
require basePath('Database.php');
$config = require basePath('config/db.php');

$db = new Database($config);

// Instantiate a new router
$router = new Router();

// Get routes
$routes = require basePath('routes.php');

// Get current URI and HTTP method
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);

