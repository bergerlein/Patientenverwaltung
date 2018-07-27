<!-- L O G I N:
* Username und Passwort wird festgelegt
* Cookie setzen (falls nicht bereits vorhanden)
* falls vorhanden: Cookie-Inhalt auslesen und einloggen
* Login-Formular einbinden, falls nicht eingeloggt
    - Username und Passwort-Eingabe werden überprüft
-->

<?php
// Username und Passwort werden vorgegeben: User, 123
$_loginuser = ["username" => "user", "passwort" => "123"];

# prüfen, ob username und passwort eingegeben wurden - wenn ja:
if (isset($_POST["username"]) && isset($_POST["passwort"])) {
# prüfen, ob userdaten korrekt; wenn ja: user eingeloggt;
    if ($_loginuser["username"] === $_POST["username"] &&
            $_loginuser["passwort"] === $_POST["passwort"]) {
        $_SESSION["login"] = "user";     // session-variable "login" wird auf wert "user" gesetzt
    }
}



#COOKIE SETZEN, falls checkbox aktiviert
if (isset($_POST['loginmerken'])) {    # prüfen, ob checkbox-variable vorhanden
    if (($_POST['loginmerken']) === '1') { # wenn checkbox aktiviert = 1
        $cookieusername = $_SESSION["login"]; # username wird in cookie-variable  gespeichert
        setcookie("cookie", $cookieusername, time() + 600, "/");  # cookie setzen, 10 min
    }
} else {
    if (isset($_COOKIE['cookie'])) {
            $_SESSION["login"] = $_COOKIE['cookie'];
    }
}

# COOKIE BEREITS VORHANDEN?
# prüfen, ob cookie gesetzt ist - wenn ja: username aus cookie holen
# wenn session login gesetzt ist
# wenn session = "user": loginsuccess anzeigen

if (isset($_SESSION["login"])) {
    switch ($_SESSION["login"]) {
        case "user":
            include "inc/loginsuccess.inc.php";
            break;
        default: include "inc/loginform.inc.php";
    }

# wenn session nicht gesetzt: loginformumlar
} else {
    // wenn niemand eingloggt ist soll login-formular angezeigt werden
    include "inc/loginform.inc.php";
}
?>
