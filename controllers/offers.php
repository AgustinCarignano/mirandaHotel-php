<?php

//require_once 'configBlade.php';

$amenities = [
    'Air conditioner' => "/public/images/amenities/airCondIcon.svg",
    'High speed WiFi' => "/public/images/amenities/wifiIcon.svg",
    'Breakfast' => "/public/images/amenities/breakIcon.svg",
    'Kitchen' => "/public/images/amenities/kitchenIcon.svg",
    'Cleaning' => "/public/images/amenities/cleanIcon.svg",
    'Shower' => "/public/images/amenities/showerIcon.svg",
    'Grocery' => "/public/images/amenities/groscerIcon.svg",
    'Single bed' => "/public/images/amenities/bedIcon.svg",
    'Shop near' => "/public/images/amenities/shopIcon.svg",
    'Towels' => "/public/images/amenities/towelIcons.svg"
];

$rooms = [
    [
        "_id" => 1,
        'photos' => ['/public/images/offerRoom1.webp', 'url2', 'url3'],
        'roomType' => "Single Bed",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
        'roomNumber' =>  704,
        'offer' =>  true,
        'price' =>  308,
        'discount' =>  15,
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
        "_id" => 2,
        'photos' => ['/public/images/offerRoom2.webp', 'url2', 'url3'],
        'roomType' => "Double Superior",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
        'roomNumber' =>  710,
        'offer' =>  true,
        'price' =>  755,
        'discount' =>  15,
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
        "_id" => 3,
        'photos' => ['/public/images/offerRoom3.webp', 'url2', 'url3'],
        'roomType' => "Double Superior",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
        'roomNumber' =>  516,
        'offer' =>  true,
        'price' =>  533,
        'discount' =>  10,
        'cancellation' =>  "Phasellus volutpat neque a tellus venenatis, a euismod augue
            facilisis. Fusce ut metus mattis, consequat metus nec, luctus
            lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to
            14 days to get a full refund.",
        'status' =>  'Booked',
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
        "_id" => 4,
        'photos' => ['/public/images/offerRoom4.webp', 'url2', 'url3'],
        'roomType' => "Suite",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
        'roomNumber' =>  920,
        'offer' =>  true,
        'price' =>  1200,
        'discount' =>  5,
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
