<?php

$rooms = $roomManager->getAllRooms(8, 1);

echo $blade->run("index", array('rooms' => $rooms, 'icons' => $icons, 'facilities' => $facilities, 'menues' => $menues));
