<?php
require_once './BladeOne-4.9/config.php';
require_once './DB/roomManager.php';
require_once './utils/helpObjects.php';
require_once './utils/functions.php';

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
