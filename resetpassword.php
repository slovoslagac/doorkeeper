<?php
include(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));
/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 5.6.2017
 * Time: 21:28
 */



if (isset($_POST["changepass"]) ) {
    $tmpObject = getuserbyusername($_POST["username"]);
    if (crypt($_POST["password"],$salt) == $tmpObject->password and $_POST["pass"]== $_POST["repass"]) {
        updateUser($_POST["username"], crypt($_POST["pass"], $salt));
    } else {
        echo "Losa lozinka!!!";
    }
}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    username: <input type="text" name="username" required>
    old : <input type="password" id="password" name="password" onchange="checkinsert()" required>
    new : <input type="password" id="pass" name="pass" onchange="checkinsert()" required>
    new : <input type="password" id="repass" name="repass" onchange="checkinsert()" required>
    <input type="submit" id="changepass" name="changepass" value="Promeni" disabled>
</form>


<script>


    function checkinsert(){
        var pass = document.getElementById("pass").value;
        var repass = document.getElementById("repass").value;
        var oldpass = document.getElementById("password").value;

        if(pass == repass && pass != '' && repass !='' ){
            if(pass == oldpass) {alert("Nova lozinka se mora razlikovati od stare !!!")} else {
                document.getElementById("changepass").disabled = false;
            }
        } else {
            if(pass == oldpass) {alert("Nova lozinka se mora razlikovati od stare !!!")}
            document.getElementById("changepass").disabled = true;
        }
    }
</script>
