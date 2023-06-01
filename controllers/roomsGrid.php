<?php
require_once('configMySQL.php');
require_once('utils/helpObjects.php');
require_once('utils/functions.php');

$rooms = $roomManager->getAllRooms();

// $icons = [
//     'bedIcon',
//     'wifiIcon',
//     'carIcon',
//     'snowIcon',
//     'barbellIcon',
//     'nosmokeIcon',
//     'carIcon',
// ];

echo $blade->run('roomsGrid', array('rooms' => $rooms, 'icons' => $icons));
