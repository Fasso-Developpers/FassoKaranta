<?php
include("../__soronta__/flo.php"); // connect to lontabodo
require_once __DIR__ . '/init.php';

use _Sessions_\AutoLogin;

if (isset($_SESSION['authenticated']) || isset($_SESSION['fasso_auth'])) {
   // we're OK
} else {
    $autologin = new AutoLogin($db);
    $autologin->checkCredentials();
    if (!isset($_SESSION['fasso_auth'])) {
        header('Location: login.php');
        exit;
    }
}