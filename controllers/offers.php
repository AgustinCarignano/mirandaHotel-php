<?php

$rooms = $roomManager->getOfferRooms();

$popularRooms = $roomManager->getAllRooms(3, 2);

echo $blade->run("offers", array("rooms" => $rooms, 'amenities' => $amenities, 'popularRooms' => $popularRooms)); // it calls /views/hello.blade.php
