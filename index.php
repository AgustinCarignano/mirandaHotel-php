<?php
require_once 'configBlade.php';
require_once('configMySQL.php');

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/aboutUs' => 'controllers/aboutUs.php',
    '/contact' => 'controllers/contact.php',
    '/offers' => 'controllers/offers.php',
    '/roomDetails' => 'controllers/roomDetails.php',
    '/roomsGrid' => 'controllers/roomsGrid.php',
    '/roomsList' => 'controllers/roomsList.php'
];

require($routes[$path]);
