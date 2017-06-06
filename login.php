<?php
include(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));

if ($session->isLoggedIn()) {
    redirectTo("index.php");
}

if (isset($_POST["checklogin"]) ) {
    $currentuser = getuserbyusername($_POST["username"]);
    if (crypt($_POST["password"],$salt) == $currentuser->password) {
        $session->login($currentuser);
        redirectTo("index.php");

    } else {
        echo "Losa lozinka!!!";
    }
}


?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="text" name="username" placeholder="username" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="Snimi" name="checklogin">
</form>

