<?php
//require_once 'configBlade.php';

$amenities = [
    ['name' => 'Air conditioner', 'img' => "/public/images/amenities/airCondIcon.svg"],
    ['name' => 'High speed WiFi', 'img' => "/public/images/amenities/wifiIcon.svg"],
    ['name' => 'Breakfast', 'img' => "/public/images/amenities/breakIcon.svg"],
    ['name' => 'Kitchen', 'img' => "/public/images/amenities/kitchenIcon.svg"],
    ['name' => 'Cleaning', 'img' => "/public/images/amenities/cleanIcon.svg"],
    ['name' => 'Shower', 'img' => "/public/images/amenities/showerIcon.svg"],
    ['name' => 'Grocery', 'img' => "/public/images/amenities/groscerIcon.svg"],
    ['name' => 'Single bed', 'img' => "/public/images/amenities/bedIcon.svg"],
    ['name' => 'Shop near', 'img' => "/public/images/amenities/shopIcon.svg"],
    ['name' => 'Towels', 'img' => "/public/images/amenities/towelIcons.svg"],
    ['name' => '24/7 Online Support', 'img' => 'public/images/amenities/suppotIcon.svg'],
    ['name' => 'Strong Locker', 'img' => 'public/images/amenities/lockerIcon.svg'],
    ['name' => 'Smart Security', 'img' => 'public/images/amenities/securIcon.svg'],
    ['name' => 'Expert Team', 'img' => 'public/images/amenities/expertIcon.svg'],
];

$room = [
    "_id" => 1,
    'photos' => ['/public/images/offerRoom3.webp', 'url2', 'url3'],
    'roomType' => "Luxury Double Bed",
    'description' =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.",
    'roomNumber' =>  704,
    'offer' =>  true,
    'price' =>  645,
    'discount' =>  10,
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
    ]
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

$presentationPrice = $room['offer'] ? "pageDetailsPresentation__prices offerPrice" : "pageDetailsPresentation__prices";

echo $blade->run("roomDetails", array("room" => $room, 'amenities' => $amenities, 'classOfferPrice' => $presentationPrice, 'icons' => $icons)); // it calls /views/hello.blade.php
