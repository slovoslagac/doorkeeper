<?php
/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 5.6.2017
 * Time: 21:05
 */

include(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));

if (!$session->isLoggedIn()) {
    redirectTo("login.php");
}

if (isset($_POST["saveuser"]) and $_POST["name"] != '' and $_POST["lastname"] != '' and $_POST["username"] != '') {
    if ($_POST["password"] == $_POST["passwordagain"]) {
        $user = new user($_POST["name"], $_POST["lastname"], $_POST["username"], $_POST["email"], crypt($_POST["password"], $salt), $_POST["gguname"], $_POST["ggpassword"]);
        $user->addnewuser();
    }
}


?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="lastname" placeholder="lastname" required>
    <input type="text" name="username" placeholder="username" required>
    <input type="email" name="email" placeholder="email" required onchange="checkinsert()">
    <input type="password" id="password" name="password" placeholder="password" required onchange="checkinsert()">
    <input type="password" placeholder="retupe password" id="passwordagain" name="passwordagain" required onchange="checkinsert()">
    <input type="text" name="gguname" placeholder="GGboost username" required>
    <input type="text" name="ggpassword" placeholder="GGboost password" required>
    <input type="submit" value="Snimi" id="saveuser" name="saveuser" disabled>
</form>



<script>
    function checkinsert(){
        var pass = document.getElementById("password").value;
        var repass = document.getElementById("passwordagain").value;
        if(pass == repass && pass != '' && repass !=''){
            document.getElementById("saveuser").disabled = false;
        } else {
            document.getElementById("saveuser").disabled = true;
        }
    }
</script>