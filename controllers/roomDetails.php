<?php

$query = explode("=", parse_url($_SERVER['REQUEST_URI'])['query']);

try {
    $room = $roomManager->getRoom($query[1]);
    $presentationPrice = $room['offer'] === 1 ? "pageDetailsPresentation__prices offerPrice" : "pageDetailsPresentation__prices";
    echo $blade->run("roomDetails", array("room" => $room, 'amenities' => $amenities, 'classOfferPrice' => $presentationPrice, 'icons' => $icons));
} catch (Throwable $e) {
    header("Location: /");
    die();
}
