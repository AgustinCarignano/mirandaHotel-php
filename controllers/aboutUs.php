<?php
//require_once 'configBlade.php';

$facilities = [
    [
        'name' => 'Have High Rating',
        'number' => '01',
        'icon' => 'public/images/facilities1.svg'
    ],
    [
        'name' => 'Quiet Hours',
        'number' => '02',
        'icon' => 'public/images/facilities2.svg'
    ],
    [
        'name' => 'Best Locations',
        'number' => '03',
        'icon' => 'public/images/facilities3.svg'
    ],
    [
        'name' => 'Free Cancellation',
        'number' => '04',
        'icon' => 'public/images/facilities4.svg'
    ],
    [
        'name' => 'Payment Options',
        'number' => '05',
        'icon' => 'public/images/facilities5.svg'
    ],
    [
        'name' => 'Special Offers',
        'number' => '06',
        'icon' => 'public/images/facilities6.svg'
    ],
];

$counters = [
    [
        'img' => 'public/images/factPersonIcon.svg',
        'alt' => 'person icon',
        'counter' => '8000',
        'text' => 'Happy Users',
    ],
    [
        'img' => 'public/images/factStartIcon.svg',
        'alt' => 'stars icon',
        'counter' => '10M',
        'text' => 'Reviews & Appriciate',
    ],
    [
        'img' => 'public/images/factWorldIcon.svg',
        'alt' => 'world icon',
        'counter' => '100',
        'text' => 'Country Coverage',
    ]
];

echo $blade->run("aboutUs", array("facilities" => $facilities, "counters" => $counters)); // it calls /views/hello.blade.php

// $title = "About";
// $homeTitle = "About Us";
// require "views/aboutUs.view.php";
