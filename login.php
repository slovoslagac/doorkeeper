<?php
include(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));

//global $salt;

if (isset($_POST["checklogin"]) ) {
    $tmpObject = getuserbyusername($_POST["username"]);
    if (crypt($_POST["password"],$salt) == $tmpObject->password) {

        echo "$tmpObject->username($tmpObject->email)";
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

