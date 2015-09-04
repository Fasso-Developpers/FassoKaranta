<?php
require_once __DIR__ . '/init.php';

use _Sessions_\AutoLogin;

if (isset($_SESSION['authenticated']) || isset($_SESSION['fasso_auth'])) {
   // we're OK
   header('Location: profile.php');
} else {
    $autologin = new AutoLogin($db);
    $autologin->checkCredentials();
    if (isset($_SESSION['fasso_auth'])) {
        header('Location: profile.php');
        exit;
    }else{
    	header('Location: profile.php');
    }
}