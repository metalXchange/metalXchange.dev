<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'metalXchange');

define('DB_USER', 'vagrant');

define('DB_PASS', 'vagrant');

require_once 'db_connect.php';

require_once 'user_seeder.php';
require_once 'guitar_seeder.php';
require_once 'leather_seeder.php';
require_once 'lycra_seeder.php';
require_once 'pyrotechnics_seeder.php';
require_once 'venues_seeder.php';

?>