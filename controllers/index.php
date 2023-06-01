<?php
require_once 'configMySQL.php';
require_once("utils/helpObjects.php");
require_once('utils/functions.php');

// function text_limit($str, $limit, $endText)
// {
//     if (strlen($str) > $limit) {
//         return substr($str, 0, $limit) . $endText;
//     }
//     return $str;
// }

$rooms = $roomManager->getAllRooms(8, 1);

echo $blade->run("index", array('rooms' => $rooms, 'icons' => $icons, 'facilities' => $facilities, 'menues' => $menues));
