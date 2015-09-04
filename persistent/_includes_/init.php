<?php
ini_set("display_errors",0);error_reporting(0); // hide the errors
use _Sessions_\PersistentSessionHandler;

require_once 'Psr4AutoloaderClass.php';
//require_once 'db_connect.php';
require_once  '../__soronta__/_lontabdo_/connect.php';

$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('_Sessions_', '_Sessions_');

$handler = new PersistentSessionHandler($db);
session_set_save_handler($handler);
session_start();
$_SESSION['active'] = time();