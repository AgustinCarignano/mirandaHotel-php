<?php
require_once './configMySQL.php';
require_once 'utils/helpObjects.php';
require_once 'utils/functions.php';

if (isset($_GET['arrivalDate']) && isset($_GET['departureDate'])) {
    $rooms = $roomManager->getAvailableRooms($_GET['arrivalDate'], $_GET['departureDate']);
} else {
    $rooms = $roomManager->getAvailableRooms();
}

echo $blade->run('roomsList', array('rooms' => $rooms, 'icons' => $icons));
