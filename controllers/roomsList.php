<?php

$roomDetailLink;

if (isset($_GET['arrivalDate']) && isset($_GET['departureDate'])) {
    $targetCheckIn = $_GET['arrivalDate'];
    $targetCheckOut = $_GET['departureDate'];
    $roomDetailLink = "roomDetails?in={$targetCheckIn}&out={$targetCheckOut}&";
    $rooms = $roomManager->getAvailableRooms($targetCheckIn, $targetCheckOut);
} else {
    $rooms = $roomManager->getAvailableRooms();
    $roomDetailLink = "roomDetails?";
}

echo $blade->run('roomsList', array('rooms' => $rooms, 'icons' => $icons, 'roomDetailLink' => $roomDetailLink));
