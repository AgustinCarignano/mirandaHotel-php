<?php
require_once 'utils/helpObjects.php';

echo $blade->run("aboutUs", array("facilities" => $facilities, "counters" => $counters));
