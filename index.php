<?php
/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 5.6.2017
 * Time: 20:28
 */
include(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));

if (!$session->isLoggedIn()) {
    redirectTo("login.php");
}


if(isset($_POST["logout"])){
    $session->logout();
    redirectTo("login.php");
}


?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <input type="submit" name="logout" value="Izloguj se">

</form>