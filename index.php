<?php
require_once 'configBlade.php';

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

// $routes = [
//     '/index' => 'controllers/index.php',
//     '/aboutUs' => 'controllers/aboutUs.php',
//     '/contact' => 'controllers/contact.php',
//     '/offers' => 'controllers/offers.php',
//     '/roomDetails' => 'controllers/roomDetails.php',
//     '/roomsGrid' => 'controllers/roomsGrid.php',
//     '/roomList' => 'controllers/roomsList.php'
// ];

require("controllers/$path.php");
