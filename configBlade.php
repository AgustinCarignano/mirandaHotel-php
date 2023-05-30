<?php
require_once 'BladeOne-4.9/lib/BladeOne.php';
require_once 'BladeOne-4.9/lib/BladeOneCache.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.