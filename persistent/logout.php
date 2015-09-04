<?php
//include("../__soronta__/flo.php"); // connect to lontabodo
require_once './_includes_/init.php';
require_once './_includes_/logout_sess.php';

if (isset($_POST['cancel'])) {
    header('Location: ' . $_SESSION['return_to']);
    exit;
}

use _Sessions_\AutoLogin;

if (isset($_POST['logout'], $_SESSION['remember']) || isset($_POST['logout'], $_SESSION['fasso_auth'])) {
?>
<!doctype html>
<html lang="en">
<head>
    <title>Logout</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Log Out</h1>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <p>
        <input type="submit" name="single" value="Don't remember me in this browser/computer">
        <input type="submit" name="all" value="Don't remember me on any computer">
    </p>
    <p>
        <input type="submit" name="cancel" value="Cancel">
    </p>
</form>
</body>
</html>
<?php
} elseif (isset($_POST['single']) || isset($_POST['all'])) {
    $autologin = new AutoLogin($db);
    if (isset($_POST['single'])) {
        $autologin->logout(false);
    } else {
        $autologin->logout(true);
    }
    logout_sess();
} elseif (isset($_POST['logout'])) {
    logout_sess();
}
