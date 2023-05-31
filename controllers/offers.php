<?php

require_once('configMySQL.php');

$amenities = [
    'Air Conditioner' => "/public/images/amenities/airCondIcon.svg",
    'High speed WiFi' => "/public/images/amenities/wifiIcon.svg",
    'Breakfast' => "/public/images/amenities/breakIcon.svg",
    'Kitchen' => "/public/images/amenities/kitchenIcon.svg",
    'Cleaning' => "/public/images/amenities/cleanIcon.svg",
    'Shower' => "/public/images/amenities/showerIcon.svg",
    'Grocery' => "/public/images/amenities/groscerIcon.svg",
    'Single Bed' => "/public/images/amenities/bedIcon.svg",
    'Shop near' => "/public/images/amenities/shopIcon.svg",
    'Towels' => "/public/images/amenities/towelIcons.svg"
];

$rooms = $roomManager->getOfferRooms();

$popularRooms = [
    [
        "_id" => 5,
        'photos' => ['/public/images/hotelRoom1.webp', 'url2', 'url3'],
        'roomType' => "Minimal Duplex Room",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
        'roomNumber' =>  605,
        'offer' =>  false,
        'price' =>  345,
        'discount' =>  0,
        'cancellation' =>  "Phasellus volutpat neque a tellus venenatis, a euismod augue
            facilisis. Fusce ut metus mattis, consequat metus nec, luctus
            lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to
            14 days to get a full refund.",
        'status' =>  'Available',
        'amenities' =>  [
            'Air conditioner',
            'High speed WiFi',
            'Breakfast',
            'Kitchen',
            'Cleaning',
            'Shower',
            'Grocery',
            'Single bed',
            'Shop near',
            'Towels'
        ],
    ],
    [
        "_id" => 6,
        'photos' => ['/public/images/hotelRoom2.webp', 'url2', 'url3'],
        'roomType' => "Luxury Double Bed",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
        'roomNumber' =>  550,
        'offer' =>  false,
        'price' =>  275,
        'discount' =>  0,
        'cancellation' =>  "Phasellus volutpat neque a tellus venenatis, a euismod augue
            facilisis. Fusce ut metus mattis, consequat metus nec, luctus
            lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to
            14 days to get a full refund.",
        'status' =>  'Available',
        'amenities' =>  [
            'Air conditioner',
            'High speed WiFi',
            'Breakfast',
            'Kitchen',
            'Cleaning',
            'Shower',
            'Grocery',
            'Single bed',
            'Shop near',
            'Towels'
        ],
    ],
    [
        "_id" => 7,
        'photos' => ['/public/images/hotelRoom3.webp', 'url2', 'url3'],
        'roomType' => "Minimal Double Room",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
        'roomNumber' =>  740,
        'offer' =>  false,
        'price' =>  550,
        'discount' =>  0,
        'cancellation' =>  "Phasellus volutpat neque a tellus venenatis, a euismod augue
            facilisis. Fusce ut metus mattis, consequat metus nec, luctus
            lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to
            14 days to get a full refund.",
        'status' =>  'Available',
        'amenities' =>  [
            'Air conditioner',
            'High speed WiFi',
            'Breakfast',
            'Kitchen',
            'Cleaning',
            'Shower',
            'Grocery',
            'Single bed',
            'Shop near',
            'Towels'
        ],
    ],
];

echo $blade->run("offers", array("rooms" => $rooms, 'amenities' => $amenities, 'popularRooms' => $popularRooms)); // it calls /views/hello.blade.php
