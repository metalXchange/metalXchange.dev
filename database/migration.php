<?php 



require_once '../bootstrap.php';

require 'db_connect.php';



$query = "DROP TABLE IF EXISTS guitars";
$dbc->exec($query);
$query = "DROP TABLE IF EXISTS leather";
$dbc->exec($query);
$query = "DROP TABLE IF EXISTS lycra";
$dbc->exec($query);
$query = "DROP TABLE IF EXISTS pyrotechnics";
$dbc->exec($query);
$query = "DROP TABLE IF EXISTS venues";
$dbc->exec($query);
$query = "DROP TABLE IF EXISTS users";
$dbc->exec($query);



require_once 'user_migration.php';
require_once 'guitar_migration.php';
require_once 'leather_migration.php';
require_once 'lycra_migration.php';
require_once 'pyrotechnics_migration.php';
require_once 'venues_migration.php';



?>