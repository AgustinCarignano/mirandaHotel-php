<?php

$rooms = $roomManager->getAllRooms();

echo $blade->run('roomsGrid', array('rooms' => $rooms, 'icons' => $icons));
