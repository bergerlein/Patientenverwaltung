<?php

/* C O N T E N T

 je nachdem, was in navigation ausgewählt wurde,
 wird andere seite in "content" inkludiert*/

if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case "add":
            include "sites/patAdd.php";
            break;

        case "show":
            include "sites/patDaten.php";
            break;
        
        case "success":
            include "sites/patAddSuccess.php";
            break;

        case "contact":
            include "sites/impressum.php";
            break;
        
        case "home":
            include "sites/home.php";
            break;
    }
}

/* standardmäßig wird "home" eingebunden*/

else {
    include "sites/home.php";
}