<?php
//require_once 'configBlade.php';

$rooms = [
    [
        "_id" => 1,
        'photos' => ['/public/images/room1.webp', 'url2', 'url3'],
        'roomType' => "Single Bed",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
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
        'photos' => ['/public/images/room2.webp', 'url2', 'url3'],
        'roomType' => "Double Superior",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
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
        'photos' => ['/public/images/room3.webp', 'url2', 'url3'],
        'roomType' => "Double Superior",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
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
        'photos' => ['/public/images/room4.webp', 'url2', 'url3'],
        'roomType' => "Suite",
        'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
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

$icons = [
    'bedIcon',
    'wifiIcon',
    'carIcon',
    'snowIcon',
    'barbellIcon',
    'nosmokeIcon',
    'carIcon',
];

echo $blade->run('roomsGrid', array('rooms' => $rooms, 'icons' => $icons));
